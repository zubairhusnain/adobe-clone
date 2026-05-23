/**
 * Offline mirror: do not fetch gnav fragments (they replace popups with per-page links).
 * Full implementation preserved in global-navigation.live.js
 */
export default async function init(block) {
  if (!block) return;
  const b = (window.__CW_ASSET_ROOT || '').replace(/\/$/, '');

  block.classList.add('ready');
  block.classList.remove('gnav-hide', 'local-nav', 'has-breadcrumbs');
  block.dataset.blockStatus = 'loaded';
  block.dataset.cwStaticGnav = '1';

  function el(tag, attrs, children) {
    const node = document.createElement(tag);
    if (attrs) {
      Object.entries(attrs).forEach(([k, v]) => {
        if (k === 'class') node.className = v;
        else if (k === 'text') node.textContent = v;
        else node.setAttribute(k, v);
      });
    }
    (children || []).forEach((c) => {
      if (typeof c === 'string') node.appendChild(document.createTextNode(c));
      else if (c) node.appendChild(c);
    });
    return node;
  }

  function buildPopup(d) {
    const lis = d.links.map((l) => el('li', null, [
      el('a', { class: 'feds-navLink', href: l.href, 'daa-ll': l.ll, text: l.text }),
    ]));
    const ul = el('ul', null, lis);
    const items = el('div', { class: 'feds-menu-items', 'daa-lh': d.menuLh }, [ul]);
    const headline = el('div', { class: 'feds-menu-headline', role: 'heading', 'aria-level': '2', text: d.headline });
    const section = el('div', { class: 'feds-menu-section' }, [headline, items]);
    const column = el('div', { class: 'feds-menu-column' }, [section]);
    const content = el('div', { class: 'feds-menu-content' }, [column]);
    const container = el('div', { class: 'feds-menu-container' }, [content]);
    return el('div', { class: 'feds-popup', 'data-cw-canonical-popup': '1' }, [container]);
  }

  function lockPopups() {
    const defs = {
      'Creativity Design': {
        headline: 'Shop for',
        menuLh: 'Shop for',
        links: [
          { href: `${b}/products/firefly/`, text: 'Creative AI', ll: 'Creative AI-1' },
          { href: `${b}/creativecloud/photography/apps/`, text: 'Photography', ll: 'Photography-2' },
        ],
      },
      'PDF E signatures': {
        headline: 'Products',
        menuLh: 'Products',
        links: [
          { href: `${b}/acrobat/`, text: 'Adobe Acrobat', ll: 'Adobe Acrobat-1' },
          { href: `${b}/acrobat/acrobat-studio/`, text: 'Adobe Acrobat Studio', ll: 'Adobe Acrobat Studio-2' },
        ],
      },
    };
    Object.keys(defs).forEach((label) => {
      const sec = block.querySelector(`.feds-navItem--megaMenu[daa-lh="${label}"]`);
      if (!sec) return;
      const btn = sec.querySelector(':scope > .feds-navLink--hoverCaret');
      sec.querySelector('.feds-popup')?.remove();
      if (btn) btn.after(buildPopup(defs[label]));
    });
    block.querySelector('.feds-navItem--megaMenu[daa-lh="Marketing Commerce"]')?.remove();
    block.querySelectorAll('[data-path]').forEach((node) => node.removeAttribute('data-path'));
  }

  lockPopups();
  if (!block.__cwGnavObs) {
    block.__cwGnavObs = 1;
    new MutationObserver(lockPopups).observe(block, { childList: true, subtree: true });
  }
  [50, 300, 800, 1500, 3000].forEach((ms) => setTimeout(lockPopups, ms));
}

export default function loadFavicon(createTag, config, getMetadata) {
  const { codeRoot } = config;
  const name = getMetadata('favicon') || 'favicon';
  const favBase = `${codeRoot}/img/favicons/${name}`;

  let favicon = document.head.querySelector('link[rel="icon"], link[rel="shortcut icon"]');
  if (!favicon) {
    favicon = createTag('link', { rel: 'icon', href: `${favBase}.ico` });
    document.head.appendChild(favicon);
    return;
  }
  const tags = `<link rel="apple-touch-icon" href="${favBase}-180.png">
                <link rel="manifest" href="${favBase}.webmanifest">`;
  favicon.insertAdjacentHTML('afterend', tags);
  favicon.href = `${favBase}.ico`;
}

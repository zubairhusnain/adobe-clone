#!/usr/bin/env python3
"""Rebuild pages/acrobat/generative-ai-pdf/index.php from acrobat-studio template."""
from __future__ import annotations

import re
import shutil
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
SRC = ROOT / "pages/acrobat/acrobat-studio/index.php"
DST = ROOT / "pages/acrobat/generative-ai-pdf/index.php"

HERO = """        <div class="hero-marquee static-links media-cover-bottom s-min-height light media-hidden-mobile media-hidden-tablet bg-bottom-mobile bg-bottom-tablet con-block has-bg" data-block-status="loaded" style="background: rgb(241, 241, 241);" daa-lh="b1|hero-marquee|desktop|gen-ai-pdf">
          <div class="background">
            <div class="mobile-only"><picture>
                <source type="image/webp" srcset="/acrobat/media_1a189184df7e4cc371f66e4406c0a906117a94d3b.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1a189184df7e4cc371f66e4406c0a906117a94d3b.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_1a189184df7e4cc371f66e4406c0a906117a94d3b.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="eager" alt="An example of how Acrobat AI Assistant summarizes key terms in a Commission Agreement." src="/acrobat/media_1a189184df7e4cc371f66e4406c0a906117a94d3b.png?width=750&amp;format=png&amp;optimize=medium" width="720" height="540">
              </picture></div>
            <div class="tablet-only"><picture>
                <source type="image/webp" srcset="/acrobat/media_1382cd82550747bb2e0dcc648f186095c012d81ca.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1382cd82550747bb2e0dcc648f186095c012d81ca.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_1382cd82550747bb2e0dcc648f186095c012d81ca.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="eager" alt="An example of how Acrobat AI Assistant summarizes key terms in a Commission Agreement." src="/acrobat/media_1382cd82550747bb2e0dcc648f186095c012d81ca.png?width=750&amp;format=png&amp;optimize=medium" width="1536" height="540">
              </picture></div>
            <div class="desktop-only expand-background" style="background: rgb(241, 241, 241);"></div>
          </div>
          <div class="foreground cols-2">
            <div class="copy"><div class="prepend row-lockup con-block m-lockup">
            <div class="row-wrapper lockup-area"><picture><img loading="lazy" src="/dc-shared/assets/images/product-icons/svg/acrobat-pro-40.svg" alt=""></picture> <span class="lockup-label">Adobe Acrobat</span></div>
          </div><div class="main-copy l-lockup l-button">
              <h1 id="chat-with-your-docs-meet-acrobat-ai-assistant" class="heading-xl">Chat with your docs. Meet Acrobat AI Assistant.</h1>
            </div><div class="row-text con-block order-0-desktop xs-spacing-bottom norm xl-body">
            <div class="row-wrapper"><p class="body-m">Break down complex language in contracts, summarize your docs in a click, and ask questions to get quick answers.</p></div>
          </div><div class="row-text con-block order-1-desktop norm">
            <div class="row-wrapper"><p class="action-area"><a href="/acrobat/free-trial-download/" class="con-button blue button-xl" daa-ll="Download app for free-1--Chat with your docs">Download app for free</a> <a href="#compare-acrobat-plans" class="con-button outline button-xl" daa-ll="Compare plans-2--Chat with your docs">Compare plans</a></p></div>
          </div><div class="row-text con-block order-3-desktop norm">
            <div class="row-wrapper"><p class="body-s">Existing Acrobat user? <a href="#already-an-existing-acrobat-customer">Click here</a></p></div>
          </div></div>
            <div class="asset"></div>
          </div>
        <div class="foreground-media"><picture style="--media-cover-position: bottom;">
                <source type="image/webp" srcset="/acrobat/media_1613ff85047d45c20eee62fea705619bc7d1c9056.png?width=2000&amp;format=webply&amp;optimize=medium" media="(min-width: 600px)">
                <source type="image/webp" srcset="/acrobat/media_1613ff85047d45c20eee62fea705619bc7d1c9056.png?width=750&amp;format=webply&amp;optimize=medium">
                <source type="image/png" srcset="/acrobat/media_1613ff85047d45c20eee62fea705619bc7d1c9056.png?width=2000&amp;format=png&amp;optimize=medium" media="(min-width: 600px)">
                <img loading="eager" alt="An example of how Acrobat AI Assistant summarizes key terms in a Commission Agreement." src="/acrobat/media_1613ff85047d45c20eee62fea705619bc7d1c9056.png?width=750&amp;format=png&amp;optimize=medium" width="1600" height="583">
              </picture></div></div>"""


def main() -> None:
    DST.parent.mkdir(parents=True, exist_ok=True)
    shutil.copy2(SRC, DST)
    html = DST.read_text(encoding="utf-8", errors="replace")

    replacements = [
        (
            "<title>Adobe Acrobat Studio — The AI-powered PDF and design solution</title>",
            "<title>Acrobat AI Assistant: Generative AI document &amp; PDF tool</title>",
        ),
        ('href="/acrobat/acrobat-studio/"', 'href="/acrobat/generative-ai-pdf/"'),
        (
            'content="Meet Adobe Acrobat Studio. The all-in-one PDF and design solution for business workflows — create, edit, sign, and collaborate with powerful AI-powered tools."',
            'content="Try the trusted Generative AI document reading tool from Adobe Acrobat. Use Generative AI to ask your PDF questions and summarize your documents."',
        ),
        (
            'content="Adobe Acrobat Studio — The AI-powered PDF and design solution"',
            'content="Acrobat AI Assistant: Generative AI document &amp; PDF tool"',
        ),
        (
            "acrobat/media_1aed67c6942c998c0ec1c9a6bfe5d59e1f4b69025.png",
            "acrobat/media_1bf7197c74726025efdeb052f82c1ed552a39a8c5.png",
        ),
        ("Adobe Acrobat Studio", "Adobe Acrobat"),
        ("acrobat-studio", "generative-ai-pdf"),
        ("|acrobat-studio|", "|gen-ai-pdf|"),
        ("daa-lh=\"gnav|localnav-acrobat|desktop|acrobat-studio\"", "daa-lh=\"gnav|localnav-acrobat|desktop|gen-ai-pdf\""),
    ]
    for old, new in replacements:
        html = html.replace(old, new)

    if 'name="personalization"' not in html:
        html = html.replace(
            '<meta name="checkout-workflow-step" content="commitment">',
            '<meta name="checkout-workflow-step" content="commitment">\n'
            '    <meta name="personalization" content="acrobat/generative-ai-pdf.json" data-localized="true">',
        )

    html = re.sub(
        r'<div class="hero-marquee[^>]*>.*?</div>\s*</div>\s*<div class="section show-sticky-section"',
        HERO + '\n      </div>\n      <div class="section show-sticky-section"',
        html,
        count=1,
        flags=re.DOTALL,
    )

    html = html.replace(
        '<h2 id="speed-up-your-workflows-with-acrobat-studio" class="heading-l">Speed up your workflows with Acrobat Studio.</h2>',
        '<h2 id="a-whole-new-way-to-get-to-what-matters" class="heading-l"><strong>A whole new way to get to what matters.</strong></h2>',
    )
    html = html.replace(
        '<p class="body-m">See how Acrobat Studio combines PDF tools with AI to help you work smarter and faster.</p>',
        '<p class="body-m">Ask questions to get quick answers linked to sources you can trust. Then use the responses to create powerful content faster.</p>',
    )
    html = html.replace(
        '<h3 id="handle-pdf-tasks-quickly-with-ai" class="heading-s">Handle PDF tasks quickly with AI.</h3>',
        '<h3 id="unlock-peak-productivity" class="heading-s">Unlock peak productivity.</h3>',
    )
    html = html.replace(
        '<p class="body-m">Ask Acrobat AI Assistant to edit, organize, and sign your PDFs so you can save time for the work that matters.</p>',
        '<p class="body-m">Ask questions to get quick answers linked to sources you can trust. Create emails, summaries, and more from your documents.</p>',
    )

    if "generative-ai-pdf.json" not in html:
        html = html.replace(
            'href="/libs/utils/decorate.js"',
            'href="/acrobat/generative-ai-pdf.json"><link rel="preload" as="fetch" crossorigin="anonymous" href="/libs/utils/decorate.js"',
            1,
        )

    DST.write_text(html, encoding="utf-8")
    print(f"Wrote {DST} ({DST.stat().st_size} bytes)")


if __name__ == "__main__":
    main()

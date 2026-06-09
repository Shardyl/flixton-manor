# CLAUDE.md — Flixton Manor (build & repo guide)

Durable context for this repo. Living status in `HANDOVER.md`.

## What this is
WordPress **theme + mu-plugins** for **Flixton Manor Nursing & Residential Care Home**, Flixton/Urmston,
Manchester — `flixtonmanor.com`. A client rebuild on the **Sensa Productions** WP Engine stack (same model as
MAH Gold): Kadence parent + bespoke child theme, Rank Math, WP Mail SMTP, **Sensa CMS** for client editing.

## Hosting / infra
- **WP Engine install:** `flixtonmanor` (temp URL `flixtonmanor.wpenginepowered.com`, webroot `/sites/flixtonmanor`).
- **Repo:** `github.com/Shardyl/flixton-manor`. Deploy = push to `main` → GitHub Actions rsync over the SSH
  gateway → `wp-content/themes/flixton-manor` + cache flush. Secret `WPE_SSH_KEY_B64` (shared deploy key).
- **Manual deploy / WP-CLI:** `ssh flixtonmanor@flixtonmanor.ssh.wpengine.net` (personal key, account-wide).
- **DNS:** registrar **GoDaddy** (`ns51/52.domaincontrol.com`). **Email = Google Workspace** (aspmx MX, SPF,
  google._domainkey DKIM, DMARC) — **MUST be preserved at go-live**; only the apex + www web records change.
  Old site currently on AWS `3.80.18.146`.
- **noindex until launch:** `blog_public=0`. Flip to 1 only at go-live (see website-management skill §9c).

## Theme
- `theme/` — Kadence child `flixton-manor`. Self-contained design (Fraunces + Mulish; teal `#15616d` /
  amber `#d99a4e` / sand `#fbf6ee`). CSS in `assets/css/main.css`; JS in `assets/js/main.js`.
- Templates: `front-page.php` (homepage), `page.php`, `single.php`, `home.php` (news), `archive.php`,
  `search.php`, `404.php`. Header/footer at theme root.
- **All content editable via Sensa CMS:** fields declared in `inc/cms-config.php` (`sensa_cms_config` filter),
  rendered with `sc_text()/sc_img()/sensa_photos()` (wrapped by `flixton_text()/flixton_img()` helpers in
  `inc/helpers.php`). Homepage editable on the **"home" page** edit screen (set as the static front page).

## Source content
- Demo (signed-off design): `Desktop/FLIXTON MANOR/` (static HTML + 105 original images).
- Full scrape (source of truth): `flixton-rebuild/_scrape/` (raw HTML, image originals, urls.txt). Gitignored.

## Conventions
- **Bump version every ship:** `theme/style.css` `Version:` + `FLIXTON_VERSION` in `functions.php`; log in CHANGELOG.
- Keep blog post slugs from the old site; tidy service URLs to `/our-care/...`.
- No em/en dashes in visible body copy.
- Repo holds only theme + mu-plugins — never WP core, wp-config, or uploads.

# HANDOVER — Flixton Manor (living status)

## Status: BUILD COMPLETE — ready for go-live review (noindex, on temp URL)
Live build: https://flixtonmanor.wpenginepowered.com (blocked from Google until launch)

## Done
- Demo design signed off (`Desktop/FLIXTON MANOR/`).
- Full scrape: 19 posts, pages, 105 images, logo, all content (`flixton-rebuild/_scrape/` + `AUDIT.md`).
- WP Engine `flixtonmanor` provisioned: Kadence + WP Mail SMTP + Rank Math + Sensa CMS active; pretty
  permalinks; `blog_public=0` (noindex).
- Theme `flixton-manor` v0.2.1 (Kadence child) — homepage, About, Our Care, Our Team, FAQ, Contact (enquiry
  form + map), News listing, single/archive/search/404. Warm teal/amber design from the demo.
- **All content editable in Sensa CMS** (homepage + inner pages via slug groups/prefixes; per-page image groups).
- Content migrated: 19 posts (slugs + dates + categories), 136 inline images localized (0 old-domain refs),
  13 featured images, primary nav menu, Rank Math meta on posts/pages/categories, site name/tagline.
- Legacy URL 301 redirects (`/my-product/*`, `/contacts-page/`, `/news-page/`).
- Parity sweep PASS: all 19 posts + all pages 200; legacy URLs 301→200.
- Pushed to `github.com/Shardyl/flixton-manor` (SSH remote).

## Needs operator (to finish go-live)
- [ ] Add repo secret `WPE_SSH_KEY_B64` (Settings → Secrets → Actions) to enable auto-deploy on push.
- [ ] Give the enquiry inbox → set with `wp option update flixton_enquiry_to "inbox@..."`.
- [ ] WP Mail SMTP: paste the Google Workspace app password (wp-admin → WP Mail SMTP) + send a test.
- [ ] Real staff names/photos for Team (current = placeholders Clare/Sue/Susan/Tina).
- [ ] Review content on the temp URL; approve go-live.

## Go-live (operator + agent)
1. GoDaddy: point apex + www A records at WP Engine; add domain + set primary in WPE portal; SSL auto-issues.
   **Leave all MX/SPF/DKIM/DMARC (Google Workspace) untouched.**
2. `wp option update blog_public 1`; confirm noindex meta is GONE; submit `/sitemap_index.xml` to Search Console.
3. PageSpeed/Lighthouse pass (image optimisation — old JPEGs are large; consider WebP/compression plugin).

## Conventions
- Bump `style.css` Version + `FLIXTON_VERSION` every ship; push to `main` → Action deploys.
- Manual deploy fallback (no rsync locally): tar theme → base64 stream over SSH gateway → extract.

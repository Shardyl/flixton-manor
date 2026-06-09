# HANDOVER — Flixton Manor (living status)

## Done
- Demo design signed off by operator (`Desktop/FLIXTON MANOR/`).
- Full site scraped: 35 pages/posts, 105 original images, logo, all content (`flixton-rebuild/_scrape/`).
- WP Engine `flixtonmanor` provisioned: Kadence parent + WP Mail SMTP + Rank Math + Sensa CMS installed/active;
  pretty permalinks `/%postname%/`; `blog_public=0` (noindex during build).
- DNS audited: GoDaddy DNS, Google Workspace email (preserve), old site on AWS.
- Theme `flixton-manor` built (v0.1.0): homepage + blog + pages templates, full Sensa CMS field registry.
- Deploy workflow added (`.github/workflows/deploy.yml`).

## Next
- [ ] Operator: add `WPE_SSH_KEY_B64` secret to `Shardyl/flixton-manor` repo (enables Actions deploy).
- [ ] Operator: confirm the inbox to forward contact-form enquiries to.
- [ ] Create the "home" page + set as static front page; confirm homepage editable in Sensa CMS.
- [ ] Import all ~20 blog posts (keep slugs + dates).
- [ ] Build inner pages: About, Our Care (+ service detail), Our Team, FAQ, Contact (with wp_mail form).
- [ ] Media import + URL rewrite into the new library.
- [ ] Rank Math meta per page/post; homepage title/desc; blogname.
- [ ] Verify/quality sweep on temp URL; keep noindex until go-live.

## Go-live (later, operator)
- Point GoDaddy apex + www at WP Engine; add domain + set primary in WPE portal; SSL auto-issues.
- LEAVE all MX/SPF/DKIM/DMARC (Google Workspace) untouched.
- Flip `blog_public=1`, submit sitemap to Search Console.

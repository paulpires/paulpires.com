# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```bash
npm run dev      # Start development server (localhost:3000)
npm run build    # Production build
npm run lint     # Run ESLint
```

## Architecture

Personal website built with Next.js 12 (Pages Router) + Tailwind CSS.

**Blogging system:**
- Add markdown files to `/posts/` directory with YAML frontmatter (`title`, `date`)
- `lib/posts.js` reads and parses posts using gray-matter
- Posts render with remark-html and remark-prism for syntax highlighting
- Posts are statically generated via `getStaticPaths`/`getStaticProps`

**Theming:**
- Dark mode via `next-themes` (system preference detection)
- Custom colors in `tailwind.config.js`: `primary`, `secondary`, `textLight`, `textDark`
- Uses `@tailwindcss/typography` prose classes

**Pages:**
- `/` - Homepage with bio and blog archive
- `/posts/[id]` - Individual blog post pages

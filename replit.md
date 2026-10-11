# College Dormitory Website

A sample PHP website introducing a college residence hall, with practical housing guidance for students.

## Run & Operate

- `pnpm --filter @workspace/api-server run dev` — run the API server (port 5000)
- `php -S 0.0.0.0:3000 -t dormitory` — run the dormitory website
- `pnpm run typecheck` — full typecheck across all packages
- `pnpm run build` — typecheck + build all packages
- `pnpm --filter @workspace/api-spec run codegen` — regenerate API hooks and Zod schemas from the OpenAPI spec
- `pnpm --filter @workspace/db run push` — push DB schema changes (dev only)
- Required env: `DATABASE_URL` — Postgres connection string

## Stack

- pnpm workspaces, Node.js 24, TypeScript 5.9
- PHP 8.4 for the dormitory website
- API: Express 5
- DB: PostgreSQL + Drizzle ORM
- Validation: Zod (`zod/v4`), `drizzle-zod`
- API codegen: Orval (from OpenAPI spec)
- Build: esbuild (CJS bundle)

## Where things live

- `dormitory/index.php` — single-page residence website and its editable content model
- `artifacts/api-server` — shared Express API
- `artifacts/mockup-sandbox` — reusable design preview canvas

## Architecture decisions

- The dormitory page is rendered directly by PHP; its school and hall copy is kept together near the top of the page for easy replacement.
- Current rates, availability, policies, and dates are intentionally deferred to the college's official housing resources.

## Product

- Visitors can explore sample room types, shared spaces, campus living, and a short guide to finding current housing information.
- The page includes responsive section navigation and expandable FAQs.

## User preferences

- The requested website implementation is PHP.

## Gotchas

- Run the dormitory preview with the `College Dormitory Website` workflow.

## Pointers

- See the `pnpm-workspace` skill for workspace structure, TypeScript setup, and package details

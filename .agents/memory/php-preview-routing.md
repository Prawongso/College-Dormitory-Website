---
name: PHP preview routing
description: Exposing a PHP-rendered page through this workspace's artifact router.
---

In a project using the artifact application router, a standalone PHP workflow can listen correctly and return HTTP 200 on its local port while the root preview still returns 404. The preview routes registered artifact services, not arbitrary workflow ports.

**Why:** a standalone server was reachable directly, but the project's root preview remained unavailable until the page was attached to a web artifact service with a root path.

**How to apply:** register a web artifact at the required preview path, bind its managed service to `0.0.0.0:$PORT`, and point PHP's document root at the correct workspace-relative directory. If the artifact's production mode is static, generate its HTML output from the PHP source during the build. Avoid adding partial `.replit` port mappings to an artifact-routed app; artifact services are normally routed by their manifests.

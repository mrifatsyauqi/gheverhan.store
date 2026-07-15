# Contributing to GHEVERHAN Commerce Platform

Welcome to the GHEVERHAN Commerce Platform project.

This document defines the contribution standards for developers and AI assistants working on this repository.

---

# Project Philosophy

GHEVERHAN is built using the following principles:

- Build Simple, Scale Smart
- Business Value First
- Blueprint Driven Development
- Documentation First
- AI Assisted Development
- Headless Commerce Architecture

Every contribution must respect these principles.

---

# Project Architecture

Frontend

- Next.js
- React
- TypeScript
- Tailwind CSS

Backend

- Laravel 12
- REST API
- Sanctum

Database

- MySQL

The architecture must not be changed without updating the Blueprint documentation.

---

# Before Contributing

Before implementing any feature, read:

docs/foundation/00_PROJECT_VISION.md

docs/foundation/01_MASTER_PLAN.md

docs/foundation/02_SYSTEM_ARCHITECTURE.md

docs/foundation/03_TECH_STACK.md

docs/foundation/04_DEVELOPMENT_POLICY.md

Then review:

- Coding Standards
- AI Development Guide
- Engineering Workflow

---

# Development Workflow

Every feature follows this process:

Requirement

↓

Blueprint Review

↓

Planning

↓

Backend Development

↓

Frontend Development

↓

Testing

↓

Documentation Update

↓

Commit

↓

Pull Request

Do not skip documentation when architectural changes are introduced.

---

# Branch Naming

Use descriptive branch names.

Examples:

feature/authentication

feature/cart

feature/checkout

feature/payment

feature/cms

feature/website-builder

fix/login

fix/payment

refactor/api

docs/blueprint

---

# Commit Convention

Follow Conventional Commits.

Examples:

feat:

fix:

docs:

style:

refactor:

test:

chore:

Examples:

feat: add customer authentication

fix: resolve checkout validation

docs: update API specification

---

# Coding Standards

All code must follow:

docs/management/30_CODING_STANDARDS.md

---

# AI Assisted Development

All AI-generated code must follow:

docs/management/31_AI_DEVELOPMENT_GUIDE.md

AI must never:

- introduce unnecessary complexity
- change project architecture
- replace core technologies
- ignore the Blueprint

---

# Pull Requests

Every Pull Request should:

- have a clear description
- explain business value
- include testing information
- update documentation if necessary

Large unrelated changes should be split into smaller Pull Requests.

---

# Testing

Before submitting changes:

- Verify Critical Business Flow.
- Run relevant tests.
- Check responsive layouts.
- Validate API responses.
- Ensure no regression is introduced.

Refer to:

docs/engineering/28_TESTING_QA.md

---

# Documentation

Documentation must be updated when changes affect:

- Architecture
- API
- Database
- Business Rules
- Workflow

Documentation is part of the implementation.

---

# Questions

If unsure:

- Follow the Blueprint.
- Prefer the simplest solution.
- Ask before introducing major architectural changes.

---

Thank you for contributing to GHEVERHAN Commerce Platform.
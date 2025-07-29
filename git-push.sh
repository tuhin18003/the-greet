#!/bin/bash

# Usage: bash git-push.sh --release "v1.0.0"

set -e

# Parse args
RELEASE=""
while [[ "$#" -gt 0 ]]; do
    case $1 in
        --release) RELEASE="$2"; shift ;;
        *) echo "❌ Unknown parameter: $1"; exit 1 ;;
    esac
    shift
done

# Get current branch
CURRENT_BRANCH=$(git symbolic-ref --short HEAD)

# Stage changes
echo "🔍 Checking for local changes..."
if [[ -n $(git status --porcelain) ]]; then
    echo "📝 Staging and committing changes..."
    git add .
    git commit -m "🔄 Update: $(date '+%Y-%m-%d %H:%M:%S')"
else
    echo "✅ No local changes to commit."
fi

# Push branch
echo "🚀 Pushing branch: $CURRENT_BRANCH"
git push origin "$CURRENT_BRANCH"

# Handle release tag
if [ -n "$RELEASE" ]; then
    echo "🏷️  Tagging release: $RELEASE"
    git tag -a "$RELEASE" -m "Release $RELEASE"
    git push origin "$RELEASE"
    echo "✅ Release tag $RELEASE pushed."
else
    echo "ℹ️  No --release version provided. Skipping tag."
fi

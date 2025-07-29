#!/bin/bash

# Usage:
#   bash git-push.sh
#   bash git-push.sh --release "v1.0.2"

set -e

# Parse arguments
RELEASE=""
while [[ "$#" -gt 0 ]]; do
    case $1 in
        --release) RELEASE="$2"; shift ;;
        *) echo "❌ Unknown parameter: $1"; exit 1 ;;
    esac
    shift
done

# Get current branch name
CURRENT_BRANCH=$(git symbolic-ref --short HEAD)

# Stage and commit if there are changes
if [[ -n $(git status --porcelain) ]]; then
    echo "📝 Committing local changes..."
    git add .
    git commit -m "🔄 Update: $(date '+%Y-%m-%d %H:%M:%S')"
else
    echo "✅ No local changes to commit."
fi

# Push the current branch
echo "🚀 Pushing branch: $CURRENT_BRANCH"
git push origin "$CURRENT_BRANCH"

# Handle release tag
if [ -n "$RELEASE" ]; then
    echo "🏷️  Tagging release: $RELEASE"

    # Delete local tag if it already exists
    if git rev-parse "$RELEASE" >/dev/null 2>&1; then
        echo "⚠️  Tag $RELEASE already exists locally. Deleting it..."
        git tag -d "$RELEASE"
    fi

    # Create and push new tag
    git tag -a "$RELEASE" -m "Release $RELEASE"
    git push origin "$RELEASE"
    echo "✅ Release tag $RELEASE pushed successfully."
else
    echo "ℹ️  No --release version provided. Skipping tagging."
fi

#!/bin/bash

SLUG=twentytwentytwo
PROJECT_TYPE=theme

if [[ ! -z "$CODESPACE_NAME" ]]
then
	SITE_HOST="https://${CODESPACE_NAME}-8080.githubpreview.dev"
else
	SITE_HOST="http://localhost:8080"
fi

exec 3>&1 4>&2
trap 'exec 2>&4 1>&3' 0 1 2 3
exec 1>setup.log 2>&1

# Prepare a nice name from project name for the site title.
function getTitleFromSlug()
{
    local _slug=${SLUG//-/ }
    local __slug=${_slug//_/ }
    local ___slug=( $__slug )
    echo "${___slug[@]^}"
}

function wait_for_database {
    count=$(expr 0)

    until wp db check --quiet
    do
    count=$(expr $count + 1)

    if [ $count -gt 15 ]; then
        echo "database server is taking too long, quitting"
        exit 1
    fi
    echo "Waiting for database to be ready"
    sleep 3
    done
}

source ~/.bashrc

# Install dependencies
# cd /var/www/html/wp-content/${PROJECT_TYPE}s/${SLUG}/
# npm i && npm run build

# Install WordPress and activate the plugin/theme.
cd /var/www/html/

# wait_for_database

echo "Setting up WordPress at $SITE_HOST"
wp db reset --yes
wp core install --url="$SITE_HOST" --title="Twenty Twenty-Two Development" --admin_user="admin" --admin_email="admin@example.com" --admin_password="password" --skip-email

echo "Install and activate Gutenberg"
wp plugin install gutenberg --activate

echo "Activate $SLUG"
wp $PROJECT_TYPE activate $SLUG

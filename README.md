DiamanteDesk
========================

This software extends base OroCRM functionality. Integrates support system for customers in your CRM system.

Now you're able to create support ticket within your CRM and associate them with any customer from your system. Tickets could be assigned to users and grouped in Branches. This allows you organize tickets related to your certain customer in one group.

At this moment software in alpha version. Eltrino Team working forward to improve and increase amount of features available to user.

Requirements
------------

DiamanteDesk supports OroCRM version 1.4+

Installation
------------

Add as dependency in composer

```bash
composer require diamante/desk-bundle:dev-master
```

In addition you will need to run DiamanteDesk internal command to install

```bash
php app/console diamante:desk:install
```

or to update already installed software

```bash
php app/console diamante:desk:update
```

Configuration
------------

For attachment download you should add additional configuration to firewalls section in `app/etc/security.yml`

```yml
diamante_attachments_download:
    pattern:        ^/desk/attachments/download/*
    provider:       chain_provider
    anonymous:      true
```

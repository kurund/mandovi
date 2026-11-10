# Mandovi

A calm, modern Riverlea stream for CiviCRM. It is named after the Mandovi, the river that flows past Panjim in Goa.

This is an [extension for CiviCRM](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/), licensed under [AGPL-3.0](LICENSE.txt). IBM Plex Sans is bundled under the [SIL Open Font License](fonts/OFL.txt).

## Getting Started

Enable the extension, then go to **Administer - Customize Data and Screens - Theme Settings** and select **Mandovi**. Riverlea's dark mode settings on that page apply to this stream.

To preview it without changing the site theme, an administrator can add `stream_override=mandovi` to any CiviCRM URL.

## Known Issues

- The stream sets its own menubar colours, so the **Menubar color** setting has no effect while it is active.
- Only Latin scripts are bundled. Other scripts, including Devanagari, use the system font.

# Mandovi

A calm, modern Riverlea stream for CiviCRM. It is named after the Mandovi, the river that flows past Panjim in Goa.

This is an [extension for CiviCRM](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/), licensed under [AGPL-3.0](LICENSE.txt). IBM Plex Sans is bundled under the [SIL Open Font License](fonts/OFL.txt).

## Getting Started

Enable the extension, then go to **Administer - Customize Data and Screens - Theme Settings** and select **Mandovi**. Riverlea's dark mode settings on that page apply to this stream.

To preview it without changing the site theme, an administrator can add `stream_override=mandovi` to any CiviCRM URL.

## Known Issues

- The stream sets its own menubar colours, so the **Menubar color** setting has no effect while it is active.
- Only Latin scripts are bundled. Other scripts, including Devanagari, use the system font.

## Credits

Mandovi started as a copy of the **Thames** stream from [RiverLea](https://lab.civicrm.org/extensions/riverlea). Thames was created by Artful Robot, based on their Aah theme. Many of Mandovi's layout fixes come from Thames and have since been modified. Both are licensed under AGPL-3.0.

IBM Plex Sans is designed by Mike Abbink and Bold Monday for IBM, and bundled from [Fontsource](https://fontsource.org/fonts/ibm-plex-sans).

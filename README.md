# AntiPM3

**Retired legacy plugin. Do not install it on a production server.** AntiPM3 targets PocketMine-MP API 3.0.0 and is not compatible with Axolotl-PM 5.x.

Earlier source revisions recursively deleted server directories, including worlds, player data, resource packs and plugins, when enabled on PocketMine-MP 3. The current source has disabled that behavior. The `antiPM3()` method now returns `false` without changing files. Existing copies built from earlier commits remain dangerous; updating this repository does not change PHARs already installed on a server.

No Axolotl-PM 5 build or stable release is provided. If you find an earlier AntiPM3 PHAR on a server, stop the server, preserve its data and remove the PHAR before restarting.

The existing [MIT license](LICENSE) and original commit history remain available for reference.

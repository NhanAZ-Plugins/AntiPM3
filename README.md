# AntiPM3

AntiPM3 is a retired, non-destructive compatibility stub. The original API 3 behavior has been disabled because earlier revisions recursively deleted server data. This API 5 update preserves the safe no-op behavior. It does not detect or block legacy plugins.

## Compatibility

- Axolotl-PM API minimum: `5.0.0`.
- CI builds and runs PHPStan at maximum level against pinned API 5.0.0 and 5.49.1 source revisions.
- The generated PHAR is smoke-tested on the official Axolotl-PM 5.49.1 server release.
- The check proves that the retired plugin loads without performing its former deletion behavior. It does not verify the original API 3 feature, which is intentionally disabled.

Do not install older AntiPM3 PHAR files. The repository update does not change PHARs already installed on a server. If an older copy is present, stop the server, preserve its data and remove the PHAR before restarting.

## Build

The GitHub Actions workflow uses the [DevTools](https://github.com/NhanAZ/DevTools) reusable workflow to run PHPStan at maximum level, build and inspect the PHAR, and smoke-test the verified artifact.

## License

The existing [MIT license](LICENSE) and original commit history remain available for reference.

For help with the NhanAZ ecosystem, visit [NhanAZ Discord](https://discord.gg/j2X83ujT6c).

# airquote
A private NPM repo strategy that requires minimal setup on a remote server - mainly just ssh access.

This is strictly a reference project.  The files and documentation within to help along with implementing into a workflow (and secondarily exemplify using npm as a build tool with args and configuration).  I highly recommend [Sinopia](https://github.com/rlidwka/sinopia) if you are looking for a self hosting private registry solution.

Tested with:
- npm 2.15.5
- Apache 2.4
- PHP 5.6 (only used for a repo directory viewer and not required)

## Remote Server
This addresses the use-case where the repo will be in a publicly available directory and allows anonymous viewing of packages, but authorization to download.

`mkdir npm-repo` then drop in the *.htaccess* and *index.php* file

Don't forget to pair the *.htaccess* with an *.htpasswd* placed in a safe location.

## Project package.json
Use npm scripts to ease the pain along with configurations and arguments for reusability.  See *example/package.json*.

### Publishing to Repo
`npm run publish:private`

(recommended to use an ssh-agent to keep from having to supply a password if frequently required)

### Installing Package from Repo
Consistently passing in a password arg for *.htpasswd* is not recommended.  Set it for this project once:

`npm config set myproject:pass <password>`

And install:

`npm run install:remote-tgz --myproject:tgz=mypackage-0.1.0.tgz`

## Why you would need this
You very likely don't. This satisfies a very specific use-case.  Use something like [Sinopia](https://github.com/rlidwka/sinopia).  npm also has support for using dependencies directly from GitHub or locally if semantic versioning isn't necessary.

# Creating a release

```bash
$ git tag -a <version> -m "some message"
$ git push origin <version>
```

# Deploying a release

The release URL should be in the form
`https://github.com/gabelorenz/hackensack_auto_body/archive/<version>.zip`.
If you go to the main github page and select a tag, the green download button
should give you a the same link.

```bash
$ # First log into godaddy server
$ cd site
$ wget <zip-file-url>
$ unzip <filename>
$ cd hackensack-<version>
$ composer install
$ cd ~
$ ln -s ~/site/hackensack-<version>/public ~/public_html
```



# RC Homepage

## Deployment

Travis CI: [![Build Status][travis-master]][travis-url]


Hosting der RC-Website ist auf einem Webland-Server. Credentials werden persönlich übergeben.

Um das deployment zu vereinfachen gibt es einen git-hook.
`.git/hooks/post-commit`

Dieser verwendet [git-ftp](https://github.com/git-ftp/git-ftp) um bei jedem commit automatisch per FTP die homepage zu aktualisieren.

[travis-master]: https://travis-ci.org/andreschaefer/rc.svg?branch=master
[travis-url]: https://travis-ci.org/andreschaefer/rc

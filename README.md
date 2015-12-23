# RC Homepage

## Deployment

Hosting der RC-Website ist auf einem Webland-Server. Credentials werden persönlich übergeben.

Um das deployment zu vereinfachen gibt es einen git-hook.
`.git/hooks/post-commit`

Dieser verwendet [git-ftp](https://github.com/git-ftp/git-ftp) um bei jedem commit automatisch per FTP die homepage zu aktualisieren.

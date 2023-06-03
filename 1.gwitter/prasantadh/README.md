## Installation and Usage

```bash
docker compose build --no-cache && docker compose up
```

Now you can point the browser up to `127.0.0.1:8000` to 
use the application.

## Miscellaneous
 `up.sh` was used during the development to test out the Dockerfile.

 For continuously testing if a file is working, the following command
 can be useful.

 ```bash
 while inotifywait -e MODIFY Dockerfile; do
     clear;
     ./up.sh;
 done;
```

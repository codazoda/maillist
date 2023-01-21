# Mail List

Very simple tool to capture email addresses from your website users.


## Getting Started

For testing, simply download this code and run PHP in server mode.

```
php -S localhost:8080
```

If you don't have PHP installed, and you're on a Mac, you can install it with Homebrew.

```
brew install php
```


## Removing Duplicates

In order to keep the primary code as simple and fast as possible it does not check for duplicate email addresses. The following linux command can remove duplicate lines from the file. Something like this could be scheduled in a cron or just run when you process the file.

```
sort ../list.txt | uniq
```

A Sample CodeIgniter project based on this [Udemy Course](https://www.udemy.com/php-mvc-framework-codeigniter-tutorial-for-beginners-project).

## Setup

This project was setup using MAMP on Mac OS X El Capitan 10.11.16.

1. [Install MAMP](https://www.mamp.info/en/downloads)
1. Clone or download this repository
1. Move the repository folder to the `/Applications/MAMP/htdocs` folder on your local hard drive
1. Start the MAMP application
1. In a browser, navigate to http://localhost:8888/codeigniter-project

## TODO

1. Improve UI
1. Refactor views
1. Test on other devices/browser *(currently only tested in Chrome on Mac OS X)*
1. Make the app publicly available via Heroku

## Bugs

### Session persistence

There was an unknown bug with the session that caused stored values not to be persisted on the next HTTP request.

**Attempts:**

1. Google searches
2. Switched from file session store to database session store
3. Restart the server
4. Starting a new project from scratch

In all attempts, the problem persisted, but the session did not.

**Solution:**

I upgraded from CodeIgniter 3.0.1 to 3.1.6 and the problem seemed to be resolved.

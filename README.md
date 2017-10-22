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

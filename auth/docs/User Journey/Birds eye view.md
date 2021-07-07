---
modified: 2021-07-07T09:22:02+05:30
---

Hi there :grin:

Before we get into the database schema and code, let's get a quick birds eye view of user interaction with amigo-auth

![alt:basic_auth](https://bot.lebara.sa/images/generic/files/basic-auth.png)

When a user attempts to perform an action deemed as a secured action (e.g. checking account statement in chatbanking), the client service, "bot" in the above example calls the check token validity endpoint to find out the current status of the user.

- If a token doesn't exist, the user us prompted to register afresh

- If a token exists, but it's past it's expiry date, user is prompted to login

- If it's valid, token is further extended and user is allowed to proceed

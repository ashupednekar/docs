# Intro

Let's discover **amigo-auth**.

## Getting Started 

**amigo-auth** is a cross-channel authentication system comprising of authentication, user management, wallet, payment system and much more...

## Stateless Mechanism

Unlike traditional login systems which use the browser session to identify an authenticated user, amigo auth relies on a custom token expiry based authentication mechanism to support users coming from various channels like whatsapp, facebook, chatbots, and so on..

Instead of passing token every time user needs to login, which can be intercepted by a man in the middle attack if proper measures are not taken, we maintain an expiring token at the backend for each user channel state, more on this in a bit.

Let's explore how a typical user token lifecycle

![alt text](https://bot.lebara.sa/images/generic/files/user_token_lifecycle-2.png)

As the above diagram illustrates, everytime a user tries to access a protected resource like financial transactions, they have to authenticate themselves upon which a new token is assigned to the channel state. If the existing token is valid, it'll be extended for a configurable period of time, say 5 minutes. This way the inactivity based logout is taken care of.

Let's dig deeper into how this works 😁

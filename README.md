
## About The Send Notes Laravel App

A Laravel app that allows you to send scheduled notes to your friend:
This snippet displays the list of notes created

![image](https://github.com/ken-calvins-o/sendnotes/assets/149637571/6dda41b4-ee54-4afe-93aa-81ff7937dd1c)


## Tech Stack

    - Tailwind CSS.
    - Alpine.js.
    - Laravel.
    - Livewire.
This snippet shows the create notes page:

![image](https://github.com/ken-calvins-o/sendnotes/assets/149637571/15ceef48-21c6-431d-8888-7ceb15e22fe3)


## Application Structure
What exactly does the app do?

    - Authenticate users using Laravel Breeze
    - Users can type up notes and send them.
    - Notes will be sent publicly via email to view. (I used postmark to achieve this)
    - The receiver can like/heart a note that's sent.

![image](https://github.com/ken-calvins-o/sendnotes/assets/149637571/79d7fd34-bc15-4fd7-863e-3203f8c67574)

Important features to note:

    - A user can only view the notes they created and only notes that are sent to them.
    - Notes should only be public once sent.
    - For notes to be as secure as possible; I have implemented the use of UUIDs instead of the traditional auto-incrementing numeric IDs.

## Scope covered 
This snippet shows the fly.io hosting dashboard:

![WhatsApp Image 2024-04-14 at 16 06 31](https://github.com/ken-calvins-o/sendnotes/assets/149637571/bf1f6f08-8bd4-4a65-bed9-934bc3f0b5c1)

    - Laravel Breeze
    - CI/CD (Using Fly.io)
    - SQLite DB
    - Laravel Livewire Volt: Single Page Application implementation
    - Models and migrations
    - Emails
    - Jobs, Queues and Cron (To send emails via background job)
    - Routing 


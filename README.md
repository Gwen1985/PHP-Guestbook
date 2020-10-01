# PHP-Guestbook

## Learning objectives

- Store data (in files)
- Convert complex constructs (array/objects) to string representation.
- Deliver a project under a strict deadline
- Deploy on Heroku

## The Mission
 
Let's make a guestbook in PHP.

Every visitor of your page can leave a message that is then saved.
Messages are then showed (last message on top) for everybody who visits the page.

Make sure to deploy the site on Heroku.

## Must-have features
- Put the footer and header HTML code in two separate files, and `require` them in your main view files to avoid repeating HTML code.
- Posts must have the following attributes:
  - Title
  - Date
  - Content
  - Author name
- Use at least 2 classes: Post & PostLoader
- The messages are sorted from new (top) to old (bottom).
- Only show the latest 20 posts.

## Nice to have features

TODO: - Profanity filter: at the top of your script create an array of "bad" words. If somebody tries to enter a message with on of those words, their messages gets rejected.

TODO: - When the user enters uses a "smiley" like ":-)", ";-)", ":-(" replace it with an image of such a smily.

TODO: - Have an input field where the user can enter how many messages he wants to see displayed.

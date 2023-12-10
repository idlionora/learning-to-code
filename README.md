# Writing Good Documentation

## Step 1 - Using Codeblocks.

Codeblocks in markdown make it *very easy* for tech people to **copy, paste, share** code.
A good __web developer__ uses codeblocks whenever possible.

Because it allows others to copy and paste their code to replicate and research issues.

- In order to create codeblocks in markdown, you need to use three backticks (`)
- Not to be confused with quotation (')
```
const hello = "this is an obligatory Hello World for a codeblock.";
```
- When you can you should attempt to apply syntax highlighting to your codeblocks
``` javascript
const person = "Guest";
function sayHello(name) {
  return `Hello ${name}, nice to meet you here on a test codeblock`;
}
console.log(sayHello(person));
```
- Make note of where the backtick keyboard key is located.
- It should appear above the tab key, 
- but it may vary based on your keyboard type.
<img src="assets/penguin%20sticker.png" width="200px"/>

Good developer use codeblocks for both Code and Errors that appear in the console.
```bash
[nodemon] restarting due to changes...
App running on port 8000...
[nodemon] starting `node ./functions/server.js`
App running on port 8000...
DB connection successful!
PATCH /api/v1/blogposts/65747a8b9ba6167cf6753593 500 99.064 ms - 1206
```
>Here is an example of using a codeblock for terminal log in bash.

## Step 2 - How to take screenshots
A screenshot is when you capture a part of your screen from your laptop, desktop or phone.
This is not be confused with taking a photo with your phone.

When you can, always provide a codeblock instead of a screenshot.
If you need to take a screenshot, make sure it is not a photo from your phone.
> There are certain cases where its okay to take photos with your phone. This is when you are showing something like a keyboard, which does not appear on a computer screen.
> if it rendered on your computer screen, it should be a screenshot.   

## Step 3 - Use Github Flavored Task List
Github extends Markdown to have a list where you can check off items.[<sup>[2]</sup>](#external-references)

- [x] Finish Step 1
- [ ] Finish Step 2
- [x] Finish Step 3

## Step 4 - Use Emojis (Optional)
Github Flavored Markdown supports emoji shortcodes.
Here are some examples:
| Name | Shortcode | Emoji |
| --- | --- | --- |
| Cloud | `:cloud:` | ☁️ |
| Cloud with lightning | `:cloud_with_lightning:` | 🌩️ |

## Step 5 - How to Create a Table
You can use the following markdown format to create tables: 
```markdown
| Name | Shortcode | Emoji |
| --- | --- | --- |
| Cloud | `:cloud:` | ☁️ |
| Cloud with lightning | `:cloud_with_lightning:` | 🌩️ |
```
Github extends the functionality of Markdown tables to provide more alignment and table cell formatting options.[^1]
- Make note of where the pipe keyboard key is located.
- It should appear above return or enter key,
- but it may very based on your keyboard layout. </br>
![Picture of penguin hugging a snake](assets/penguin%20sticker5.png)

## External References 
- [Basic writing and formatting syntax (Github Markdown)](https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax) 
- [Github Flavored Markdown Spec](https://github.github.com/gfm/)
- [GFM - Tasks Lists](https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax#task-lists)<sup>[2]</sup>
- [GFM - Emoji Cheat Sheet](https://github.com/ikatyang/emoji-cheat-sheet/blob/master/README.md)
[^1]:[GFM - Tables (with extensions)](https://github.github.com/gfm/#tables-extension-)

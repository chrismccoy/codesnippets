# 📝 Code Snippets WordPress Theme

A modern, minimalist WordPress theme built with Tailwind CSS, designed specifically for developers and programmers to showcase and share their code snippets with style and clarity using standard posts.

### ✨ Features

*   **✍️ Optimized for Posts:** Leverages standard WordPress Posts, making it simple and familiar to manage your code snippets.
*   **🌐 Custom 'Language' Taxonomy:** Organize snippets by programming `Language` for easy filtering and navigation.
*   **🎨 Syntax Highlighting:** Integrated with Prism.js for beautiful, readable code blocks right out of the box.
*   **🛠️ Snippet Actions:** Easily copy code to the clipboard, print, download, or share any snippet with dedicated one-click buttons.
*   **🌓 Dark & Light Mode:** A sleek, persistent theme switcher that respects user's system preferences and remembers their choice.
*   **💨 Built with Tailwind CSS:** A utility-first CSS framework for rapid UI development and easy customization.
*   **📱 Fully Responsive:** Looks great on all devices, from desktops to mobile phones.
*   **🔗 Pretty Permalinks:** Clean, SEO-friendly URLs for search results (e.g., `/search/keyword`).
*   **🔢 Custom Pagination:** Styled pagination to seamlessly match the theme's minimalist design.

### 🚀 Installation and Usage

Follow these steps to get the theme up and running.

#### Installation

1.  Download the latest release as a `.zip` file.
2.  In your WordPress admin dashboard, navigate to **Appearance > Themes**.
3.  Click the **Add New** button, then **Upload Theme**.
4.  Choose the downloaded `.zip` file and click **Install Now**.
5.  Once installed, click **Activate**.
6.  **Important:** Go to **Settings > Permalinks** and simply click **Save Changes**. This ensures the pretty search URLs work correctly.

#### Adding a New Code Snippet

The theme is designed to treat each standard WordPress post as a code snippet.

1.  Navigate to **Posts > Add New**.
2.  **Title:** Use the title field for your snippet's name (e.g., "JavaScript Debounce Function").
3.  **Editor:** Paste your raw code directly into the main content block.
4.  **Excerpt:** Write a short description in the "Excerpt" box. This will be shown on the homepage and archive pages.
5.  **Language:** On the right-hand sidebar, find the **"Languages"** box. Add the programming language (e.g., "JavaScript", "PHP") to enable correct syntax highlighting and categorization.
6.  **Publish** your post. Your new code snippet is now live.

---

### ⚙️ Development Workflow & Compiling Styles

This theme uses [Tailwind CSS](https://tailwindcss.com/) for styling. The final stylesheet (`/assets/css/app.css`) is a compiled and minified file. You should not edit this file directly. Instead, you should edit the source stylesheet (`/assets/scss/app.scss`) and then compile your changes using the provided npm scripts.

#### Prerequisites

Before you begin, ensure you have [Node.js](https://nodejs.org/) and npm installed on your machine.

#### 1. Install Dependencies

Navigate to your theme's root directory in your terminal and run the following command to install Tailwind CSS:

```bash
npm install
```

This will download the `tailwindcss` package

#### 2. Compiling Styles

Two scripts are available for compiling your CSS:

**For Development:**
This command will start a process that watches your `tailwind.config.js` file and all source files for changes and automatically recompiles the CSS. This is the command you should use while actively developing the theme.

```bash
npm run dev
```

**For Production:**
When you are finished with your changes and are ready to deploy the theme, run this command. It will compile and minify the CSS file for the smallest possible file size and best performance.

```bash
npm run build
```

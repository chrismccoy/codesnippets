/**
 * Main JavaScript file for the CodeSnippets theme.
 *
 * - Dark/light mode theme switching.
 * - Code snippet actions (copy, print, download, share).
 * - Scroll to top.
 *
 * @package CodeSnippets
 * @since 1.0.0
 */

document.addEventListener("DOMContentLoaded", () => {
	/**
	 * Handles toggling dark/light mode and saving the user's preference.
	 */
	const themeSwitcher = document.getElementById("theme-switcher");
	const sunIcon = document.getElementById("theme-icon-sun");
	const moonIcon = document.getElementById("theme-icon-moon");
	const htmlElement = document.documentElement;

	if (themeSwitcher && sunIcon && moonIcon) {
		// Applies the theme by adding/removing the 'dark' class and toggling icons.
		const applyTheme = (theme) => {
			if (theme === "dark") {
				htmlElement.classList.add("dark");
				sunIcon.classList.add("hidden");
				moonIcon.classList.remove("hidden");
				localStorage.setItem("theme", "dark");
			} else {
				htmlElement.classList.remove("dark");
				sunIcon.classList.remove("hidden");
				moonIcon.classList.add("hidden");
				localStorage.setItem("theme", "light");
			}
		};

		themeSwitcher.addEventListener("click", () => {
			const isDark = htmlElement.classList.contains("dark");
			applyTheme(isDark ? "light" : "dark");
		});

		// Set initial theme on page load based on saved preference or OS setting.
		const savedTheme = localStorage.getItem("theme");
		const prefersDark = window.matchMedia(
			"(prefers-color-scheme: dark)",
		).matches;

		if (savedTheme) {
			applyTheme(savedTheme);
		} else if (prefersDark) {
			applyTheme("dark");
		} else {
			applyTheme("light");
		}
	}

	/**
	 * Handles Copy, Print, Download, and Share functionality.
	 */
	const copyBtn = document.getElementById("copy-code-btn");
	const printBtn = document.getElementById("print-btn");
	const downloadBtn = document.getElementById("download-btn");
	const shareBtn = document.getElementById("share-btn");
	const codeContent = document.getElementById("code-content");

	// Only run this code if we are on a page with a code block.
	if (codeContent) {
		// Copy Code Button
		if (copyBtn) {
			copyBtn.addEventListener("click", () => {
				navigator.clipboard.writeText(codeContent.innerText).then(() => {
					const originalText = copyBtn.textContent;
					copyBtn.textContent = "Copied!";
					setTimeout(() => {
						copyBtn.textContent = originalText;
					}, 2000);
				});
			});
		}

		// Print Button
		if (printBtn) {
			printBtn.addEventListener("click", () => {
				window.print();
			});
		}

		// Download Button
		if (downloadBtn) {
			downloadBtn.addEventListener("click", () => {
				const filename = downloadBtn.dataset.filename || "snippet.txt";
				const content = codeContent.innerText;
				const blob = new Blob([content], { type: "text/plain" });
				const url = URL.createObjectURL(blob);
				const a = document.createElement("a");
				a.href = url;
				a.download = filename;
				document.body.appendChild(a);
				a.click();
				document.body.removeChild(a);
				URL.revokeObjectURL(url);
			});
		}

		// Share Button (copies shortlink)
		if (shareBtn) {
			shareBtn.addEventListener("click", () => {
				const link = shareBtn.dataset.shortlink;
				if (link) {
					navigator.clipboard.writeText(link).then(() => {
						const originalText = shareBtn.textContent;
						shareBtn.textContent = "Link Copied!";
						setTimeout(() => {
							shareBtn.textContent = originalText;
						}, 2000);
					});
				}
			});
		}
	}

	/**
	 * Shows/hides the button and handles the scroll action.
	 */
	const scrollToTopBtn = document.getElementById("scroll-to-top-btn");

	if (scrollToTopBtn) {
		window.addEventListener("scroll", () => {
			if (window.scrollY > 400) {
				scrollToTopBtn.classList.remove("hidden");
			} else {
				scrollToTopBtn.classList.add("hidden");
			}
		});

		scrollToTopBtn.addEventListener("click", () => {
			window.scrollTo({
				top: 0,
				behavior: "smooth",
			});
		});
	}
});

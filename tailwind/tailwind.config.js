// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			fontFamily: {
				heading: ['Sen', ...defaultTheme.fontFamily.sans],
				body: ['Inter', ...defaultTheme.fontFamily.sans],
				serif: ['Noto Serif', ...defaultTheme.fontFamily.sans],
				mono: ['Inter', ...defaultTheme.fontFamily.sans],
			},
			colors: {
				'black': '#1c1917',
			},
			backgroundImage: {
        'rococo-cream': "url('./assets/patterns/rococo-bg.jpg')",
        'paper-grain': "url('./assets/patterns/ep_naturalwhite.png')",
        'light-wood': "url('./assets/patterns/light-veneer.png')",
        'dark-wood': "url('./assets/patterns/dark-veneer.png')",
        'dots': "url('./assets/patterns/p6.png')",
        'diagonal': "url('./assets/patterns/45degreee_fabric.png')",
      },
			aspectRatio: {
        'banner': '4 / 1.5',
      },
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		// require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};

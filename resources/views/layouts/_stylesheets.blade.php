<style>
/* font face */
	@font-face {
		font-family: 'Roboto';
		font-style: normal;
		font-weight: normal;
		src: local('Roboto'), local('Roboto-Regular'), url(/storage/material_design_fonts/roboto-fontfacekit/web_fonts/roboto_regular_macroman/Roboto-Regular-webfont.woff) format('woff');
	}
	@font-face {
		font-family: 'Roboto';
		font-style: normal;
		font-weight: bold;
		src: local('Roboto'), local('Roboto-Bold'), url(/storage/material_design_fonts/roboto-fontfacekit/web_fonts/roboto_bold_macroman/Roboto-Bold-webfont.woff) format('woff');
	}
	@font-face {
		font-family: 'Roboto';
		font-style: italic;
		font-weight: normal;
		src: local('Roboto'), local('Roboto-Italic'), url(/storage/material_design_fonts/roboto-fontfacekit/web_fonts/roboto_italic_macroman/Roboto-Italic-webfont.woff) format('woff');
	}
	@font-face {
		font-family: 'Roboto';
		font-style: italic;
		font-weight: bold;
		src: local('Roboto'), local('Roboto-Bolditalic'), url(/storage/material_design_fonts/roboto-fontfacekit/web_fonts/roboto_bolditalic_macroman/Roboto-BoldItalic-webfont.woff) format('woff');
	}

/* default variables */
	:root {
		/* color */
			/* grey */
		--color-grey-50: #fafafa;
		--color-grey-100: #f5f5f5;
		--color-grey-200: #eeeeee;
		--color-grey-300: #e0e0e0;
		--color-grey-400: #bdbdbd;
		--color-grey-500: #9e9e9e;
		--color-grey-600: #757575;
		--color-grey-700: #616161;
		--color-grey-800: #424242;
		--color-grey-900: #212121;
			/* brown */
		--color-brown-50: #efebe9;
		--color-brown-100: #d7ccc8;
		--color-brown-200: #bcaaa4;
		--color-brown-300: #a1887f;
		--color-brown-400: #8d6e63;
		--color-brown-500: #795548;
		--color-brown-600: #6d4c41;
		--color-brown-700: #5d4037;
		--color-brown-800: #4e342e;
		--color-brown-900: #3e2723;
			/* bluegrey */
		/*  */
		
		/* elevation & shadow */
		--elevation_shadow-1:
			0px 2px 1px -1px rgba(0, 0, 0, 0.2),
			0px 1px 1px 0px rgba(0, 0, 0, 0.14),
			0px 1px 3px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-2:
			0px 3px 1px -2px rgba(0, 0, 0, 0.2),
			0px 2px 2px 0px rgba(0, 0, 0, 0.14),
			0px 1px 5px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-3:
			0px 3px 3px -2px rgba(0, 0, 0, 0.2),
			0px 3px 4px 0px rgba(0, 0, 0, 0.14),
			0px 1px 8px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-4:
			0px 2px 4px -1px rgba(0, 0, 0, 0.2),
			0px 4px 5px 0px rgba(0, 0, 0, 0.14),
			0px 1px 10px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-6:
			0px 3px 5px -1px rgba(0, 0, 0, 0.2),
			0px 6px 10px 0px rgba(0, 0, 0, 0.14),
			0px 1px 18px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-8:
			0px 5px 5px -3px rgba(0, 0, 0, 0.2),
			0px 8px 10px 1px rgba(0, 0, 0, 0.14),
			0px 3px 14px 2px rgba(0, 0, 0, 0.12);
		--elevation_shadow-9:
			0px 5px 6px -3px rgba(0, 0, 0, 0.2),
			0px 9px 12px 1px rgba(0, 0, 0, 0.14),
			0px 3px 16px 2px rgba(0, 0, 0, 0.12);
		--elevation_shadow-12:
			0px 7px 8px -4px rgba(0, 0, 0, 0.2),
			0px 12px 17px 2px rgba(0, 0, 0, 0.14),
			0px 5px 22px 4px rgba(0, 0, 0, 0.12);
		--elevation_shadow-16:
			0px 8px 10px -5px rgba(0, 0, 0, 0.2),
			0px 16px 24px 2px rgba(0, 0, 0, 0.14),
			0px 6px 30px 5px rgba(0, 0, 0, 0.12);
		--elevation_shadow-24:
			0px 11px 15px -7px rgba(0, 0, 0, 0.2),
			0px 24px 38px 3px rgba(0, 0, 0, 0.14),
			0px 9px 46px 8px rgba(0, 0, 0, 0.12);
	}

/* global components */
	* {
		font-family: 'Roboto', sans-serif;
		font-size: 100%;
		/* margin: 0px; */
		/* padding: 0px; */
		/* box-sizing: border-box; */
	}
	/* link */
	a {
		text-decoration: none;
	}
	/* button */
	button:focus {
		outline: none;
	}
	/* horizontal line */
	hr {
		/* height: 1px; */
		/* border: none; */
		/* background-color: var(--color-grey-300); */
	}

/* custom scrollbar */
	/* width & height */
	::-webkit-scrollbar {
		width: 5px;
		height: 5px;
	}
	/* Track */
	::-webkit-scrollbar-track {
		background: rgba(158, 158, 158, 0.75);
	}
	/* Handle */
	::-webkit-scrollbar-thumb {
		background: rgba(97, 97, 97, 0.75);
		border-radius: 3px;
	}

/* flexbox */
	.x3-flexbox_container {
		display: flex;
	}
	/* flex direction */
		.flex-row {
			flex-direction: row;
		}
		.flex-column {
			flex-direction: column;
		}
	/* flex justify content */
		.flex-left {
			justify-content: flex-start;
		}
		.flex-center {
			justify-content: center;
		}
		.flex-right {
			justify-content: flex-end;
		}
		.flex-around {
			justify-content: space-around;
		}
		.flex-between {
			justify-content: space-between;
		}
	/* flex align items */
		.flex-top {
			align-items: flex-start;
		}
		.flex-middle {
			align-items: center;
		}
		.flex-bottom {
			align-items: flex-end;
		}
		.flex-stretch {
			align-items: stretch;
		}
	/* flex initial */
		.flex-initial {
			flex: initial;
		}
	/* flex width */
		.flex-1 {flex: 1;} .flex-2 {flex: 2;} .flex-3 {flex: 3;}
		.flex-4 {flex: 4;} .flex-5 {flex: 5;} .flex-6 {flex: 6;}
		.flex-7 {flex: 7;} .flex-8 {flex: 8;} .flex-9 {flex: 9;}
		.flex-10 {flex: 10;} .flex-11 {flex: 11;} .flex-12 {flex: 12;}
	/* flex wrap */
		.flex-wrap {
			flex-wrap: wrap;
		}

/* custom components */
	.x3-footer {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		flex: initial;
		width: 100%;
		height: 250px;
		margin: 0px;
		padding: 0px;
		letter-spacing: 1px;
		line-height: 14px;
		/* border-top: 1px solid; */
		/* border-bottom: 1px solid; */
	}

/* responsive */
	/* mobile styles */
	@media only screen and (max-width: 768px) {
		body {
			background: var(--color-grey-50);
		}
	}

	/* desktop styles */
	@media only screen and (min-width: 769px) and (max-width: 1440px) {
		body {
			background: var(--color-grey-300);
		}

		.x3-screen_message {
			display: none;
		}
	}

	/* 4k styles */
	@media only screen and (min-width: 1441px) {
		body {
			background: var(--color-grey-500);
		}

		.x3-screen_message {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			flex: initial;
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0px;
			left: 0px;
			font-size: 125%;
			font-weight: lighter;
			letter-spacing: 5px;
			color: var(--color-grey-300);
			background: var(--color-grey-500);
			z-index: 999;
		}
	}
</style>
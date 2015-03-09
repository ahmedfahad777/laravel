/**
 * Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

// This file contains style definitions that can be used by CKEditor plugins.
//
// The most common use for it is the "stylescombo" plugin, which shows a combo
// in the editor toolbar, containing all styles. Other plugins instead, like
// the div plugin, use a subset of the styles on their feature.
//
// If you don't have plugins that depend on this file, you can simply ignore it.
// Otherwise it is strongly recommended to customize this file to match your
// website requirements and design properly.

CKEDITOR.stylesSet.add( 'default', [
	/* Block Styles */

	// These styles are already available in the "Format" combo ("format" plugin),
	// so they are not needed here by default. You may enable them to avoid
	// placing the "Format" combo in the toolbar, maintaining the same features.
	/*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 065b76f90b2ff7ee69815b4ce700376e708acc55
>>>>>>> a1de9b143e16067bb77e823064c94d33d825d54e
>>>>>>> 0ca9bd85c649a9ede4372c3aeeb41ef4b7aae6e4
	{ name: 'Paragraph',		element: 'p' },
	{ name: 'Heading 1',		element: 'h1' },
	{ name: 'Heading 2',		element: 'h2' },
	{ name: 'Heading 3',		element: 'h3' },
	{ name: 'Heading 4',		element: 'h4' },
	{ name: 'Heading 5',		element: 'h5' },
	{ name: 'Heading 6',		element: 'h6' },
	{ name: 'Preformatted Text',element: 'pre' },
	{ name: 'Address',			element: 'address' },
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
	{ name: 'Paragraph',		partials-about: 'p' },
	{ name: 'Heading 1',		partials-about: 'h1' },
	{ name: 'Heading 2',		partials-about: 'h2' },
	{ name: 'Heading 3',		partials-about: 'h3' },
	{ name: 'Heading 4',		partials-about: 'h4' },
	{ name: 'Heading 5',		partials-about: 'h5' },
	{ name: 'Heading 6',		partials-about: 'h6' },
	{ name: 'Preformatted Text',partials-about: 'pre' },
	{ name: 'Address',			partials-about: 'address' },
>>>>>>> 018f6b9d81e5d7bc15aa547482fadde9312e8040
>>>>>>> 065b76f90b2ff7ee69815b4ce700376e708acc55
>>>>>>> a1de9b143e16067bb77e823064c94d33d825d54e
>>>>>>> 0ca9bd85c649a9ede4372c3aeeb41ef4b7aae6e4
	*/

	{ name: 'Italic Title',		element: 'h2', styles: { 'font-style': 'italic' } },
	{ name: 'Subtitle',			element: 'h3', styles: { 'color': '#aaa', 'font-style': 'italic' } },
	{
		name: 'Special Container',
		element: 'div',
		styles: {
			padding: '5px 10px',
			background: '#eee',
			border: '1px solid #ccc'
		}
	},

	/* Inline Styles */

	// These are core styles available as toolbar buttons. You may opt enabling
	// some of them in the Styles combo, removing them from the toolbar.
	// (This requires the "stylescombo" plugin)
	/*
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 065b76f90b2ff7ee69815b4ce700376e708acc55
>>>>>>> a1de9b143e16067bb77e823064c94d33d825d54e
>>>>>>> 0ca9bd85c649a9ede4372c3aeeb41ef4b7aae6e4
	{ name: 'Strong',			element: 'strong', overrides: 'b' },
	{ name: 'Emphasis',			element: 'em'	, overrides: 'i' },
	{ name: 'Underline',		element: 'u' },
	{ name: 'Strikethrough',	element: 'strike' },
	{ name: 'Subscript',		element: 'sub' },
	{ name: 'Superscript',		element: 'sup' },
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
	{ name: 'Strong',			partials-about: 'strong', overrides: 'b' },
	{ name: 'Emphasis',			partials-about: 'em'	, overrides: 'i' },
	{ name: 'Underline',		partials-about: 'u' },
	{ name: 'Strikethrough',	partials-about: 'strike' },
	{ name: 'Subscript',		partials-about: 'sub' },
	{ name: 'Superscript',		partials-about: 'sup' },
>>>>>>> 018f6b9d81e5d7bc15aa547482fadde9312e8040
>>>>>>> 065b76f90b2ff7ee69815b4ce700376e708acc55
>>>>>>> a1de9b143e16067bb77e823064c94d33d825d54e
>>>>>>> 0ca9bd85c649a9ede4372c3aeeb41ef4b7aae6e4
	*/

	{ name: 'Marker',			element: 'span', attributes: { 'class': 'marker' } },

	{ name: 'Big',				element: 'big' },
	{ name: 'Small',			element: 'small' },
	{ name: 'Typewriter',		element: 'tt' },

	{ name: 'Computer Code',	element: 'code' },
	{ name: 'Keyboard Phrase',	element: 'kbd' },
	{ name: 'Sample Text',		element: 'samp' },
	{ name: 'Variable',			element: 'var' },

	{ name: 'Deleted Text',		element: 'del' },
	{ name: 'Inserted Text',	element: 'ins' },

	{ name: 'Cited Work',		element: 'cite' },
	{ name: 'Inline Quotation',	element: 'q' },

	{ name: 'Language: RTL',	element: 'span', attributes: { 'dir': 'rtl' } },
	{ name: 'Language: LTR',	element: 'span', attributes: { 'dir': 'ltr' } },

	/* Object Styles */

	{
		name: 'Styled image (left)',
		element: 'img',
		attributes: { 'class': 'left' }
	},

	{
		name: 'Styled image (right)',
		element: 'img',
		attributes: { 'class': 'right' }
	},

	{
		name: 'Compact table',
		element: 'table',
		attributes: {
			cellpadding: '5',
			cellspacing: '0',
			border: '1',
			bordercolor: '#ccc'
		},
		styles: {
			'border-collapse': 'collapse'
		}
	},

	{ name: 'Borderless Table',		element: 'table',	styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
	{ name: 'Square Bulleted List',	element: 'ul',		styles: { 'list-style-type': 'square' } }
] );


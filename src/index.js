import { registerBlockType } from '@wordpress/blocks';
import edit from './edit';
import save from './save';
import "./style.scss";

registerBlockType( 'blocks-course/firstblock', {
	edit: edit,
	save: save,
} );

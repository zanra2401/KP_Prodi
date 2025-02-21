import './bootstrap';
import '../css/app.css';
import Editor from '@toast-ui/editor'
import '@toast-ui/editor/dist/toastui-editor.css';

const editor = new Editor({
  el: document.querySelector('#editor'),
  height: '400px',
  initialEditType: 'markdown',
  placeholder: 'Write something cool!',
})

window.Alpine = Alpine;

Alpine.start();

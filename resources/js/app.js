import './bootstrap';
import '../css/app.css';
import Alpine from 'alpinejs';
import Quill from 'quill';
import 'quill/dist/quill.snow.css';

const toolbarOptions = [
    [{ 'header': [1, 2, 3, false] }],
    [{ 'font': [] }],
    [{ 'size': ['small', true, 'large', 'huge'] }],
    ['bold', 'italic', 'underline', 'strike'],       
    [{ 'color': [] }, { 'background': [] }],          
    [{ 'script': 'sub'}, { 'script': 'super' }],      
    [{ 'blockquote': true }, { 'code-block': true }],
    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'indent': '-1'}, { 'indent': '+1' }],
    [{ 'align': [] }],
    ['link', 'image'],                                    
];

document.addEventListener("DOMContentLoaded", function() {
    var quill = new Quill("#editor", {
        theme: "snow",
        placeholder: "Tulis artikel di sini...",
        modules: {
            toolbar: toolbarOptions
        }
    });
});

window.Alpine = Alpine;

Alpine.start();

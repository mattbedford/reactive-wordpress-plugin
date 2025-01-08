import App from './App';
import './styles.scss';

const {createRoot} = wp.element;

const container = document.getElementById('react-app');
const root = createRoot(container);
root.render(<App />);
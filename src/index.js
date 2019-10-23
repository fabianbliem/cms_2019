import './styles/style.scss';

const images = importAll(require.context('./assets/icons', false, /\.(png|jpe?g|svg)$/));
const imagesImages = importAll(require.context('./assets/images', false, /\.(png|jpe?g|svg)$/));

function importAll(r) {
    let images = {};
    r.keys().map((item, index) => { images[item.replace('./', '')] = r(item); });
    return images;
}
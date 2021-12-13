import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

// loads the Icon plugin
UIkit.use(Icons);

// components can be called from the imported UIkit reference
UIkit.notification("<span uk-icon='icon: check'></span> Kérj ajánlatot itt: <a class='uk-link-text' href='/kapcsolat'>Árajánlat</a>", { status:'success',  pos: 'bottom-right' });
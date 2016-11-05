var path = require('path');

module.exports = {
    resolve: {
        extensions: ['.js', '.vue', '.css', '.json'],
        alias: {
            admin: path.join(__dirname, 'resources/assets/js/admin'),
            components: path.join(__dirname, 'resources/assets/js/components'),
            api: path.join(__dirname, 'resources/assets/js/admin/api'),
            views: path.join(__dirname, 'resources/assets/js/admin/views')
        }
    }
}

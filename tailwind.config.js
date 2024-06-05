module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        colors: {
            clifford: "#da373d",
            main_green: "#4C8F8B",
            main_green_hover: "#5B9692",
            semi_dark_green: "#025E5A",
            dark_green: "#344948",
            light_green: "#62B5B1",
            button_green: "#347677",
        },
    },
    plugins: [require("flowbite/plugin")],
};

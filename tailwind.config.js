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
        },
    },
    plugins: [require("flowbite/plugin")],
};

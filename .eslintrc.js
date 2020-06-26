module.exports = {
  env: {
    "browser": true,
    "es2020": true,
    "jquery": true
  },
  extends: [
    "standard"
  ],
  parserOptions: {
    "ecmaVersion": 11,
    "sourceType": 'module'
  },
  rules: {
    "semi": [2, "always"],
    "indent": ["error", 4],
    // "no-tabs": ["error", { allowIndentationTabs: true }]
  },
}

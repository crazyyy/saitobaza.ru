grunt.loadNpmTasks('grunt-uncss');

uncss: {
  dist: {
    src: ['clean-before/**/*.html'],
    dest: 'dist/css/tidy.css'
    options: {
      report: 'min' // optional: include to report savings
    }
  }
}

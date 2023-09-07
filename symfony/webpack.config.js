 Encore
      // ...
      .setOutputPath('public/build/')

     .copyFiles({
         from: './assets/images',

         // optional target path, relative to the output dir
         to: 'images/[path][name].[ext]',

         // if versioning is enabled, add the file hash too
         //to: 'images/[path][name].[hash:8].[ext]',

         // only copy files matching this pattern
         //pattern: /\.(png|jpg|jpeg)$/
     })


  $(function() {

    $(document).on('click', '#delete', function (e) {
      e.preventDefault();
      var link = $(this).attr('href');
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = link;
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      });
    });

    $(document).on('click', '#confirm', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
          title: 'Are you sure you want to confirm?',
          text: "Once confirmed, you won't be able to making it pending",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, confirm the order'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = link;
            Swal.fire(
              'Confirmed!',
              'Confirm Order',
              'success'
            )
          }
        });
      });
  
      $(document).on('click', '#processing', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
          title: 'Are you sure you want to process the order?',
          text: "Once processed, you won't be able to making it confirmed",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, process the order'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = link;
            Swal.fire(
              'Processed!',
              'Processing Order',
              'success'
            )
          }
        });
      });

      $(document).on('click', '#picked', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
          title: 'Are you sure you want to pick the order?',
          text: "Once picked, you won't be able to process the order again",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, pick the order'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = link;
            Swal.fire(
              'Picked!',
              'Pick Order',
              'success'
            )
          }
        });
      });

      $(document).on('click', '#shipped', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
          title: 'Are you sure you want to ship the order?',
          text: "Once shipped, you won't be able to pick the order again",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, ship the order'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = link;
            Swal.fire(
              'Shipped!',
              'Ship Order',
              'success'
            )
          }
        });
      });

      $(document).on('click', '#delivered', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
          title: 'Are you sure you want to deliver the order?',
          text: "Once delivered, you won't be able to ship the order again",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, deliver the order'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = link;
            Swal.fire(
              'Delivered!',
              'Deliver Order',
              'success'
            )
          }
        });
      });

      $(document).on('click', '#cancelled', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
          title: 'Are you sure you want to cancel the order?',
          text: "Once cancelled, you won't be able to deliver the order again",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, cancel the order'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = link;
            Swal.fire(
              'Cancelled!',
              'Cancel Order',
              'success'
            )
          }
        });
      });

  });

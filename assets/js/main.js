var shelf = {
  init: function() {
    this.getDom();
    this.setEvents();
  },

  getDom: function() {
    this.shelfBtn = document.getElementById('shelfBtn');
    this.shelf = document.getElementById('shelf');
    this.shelfContent = document.getElementById('shelfContent');
    this.shelfClose = document.getElementById('shelfClose');
    this.body = document.body;
  },

  setEvents: function() {
    this.shelfBtn.addEventListener('click', this.toggleShelf.bind(this));
    this.shelf.addEventListener('click', this.closeShelf.bind(this));
    this.shelfClose.addEventListener('click', this.toggleShelf.bind(this));
  },

  toggleShelf: function() {
    if (this.shelf.style.display === 'none') {
      this.body.style.overflow = 'hidden';
      this.shelf.style.display = 'block';
      setTimeout(function() {
        this.shelfContent.classList.add('shelf__content--open');
      }.bind(this), 100);
    } else {
      this.body.style.overflow = 'auto';
      this.shelfContent.classList.remove('shelf__content--open');
      setTimeout(function() {
        this.shelf.style.display = 'none';
      }.bind(this), 250);
    }
  },

  closeShelf: function(e) {
    if (e.target.id === 'shelf') {
      this.toggleShelf();
    }
  }
}

shelf.init();

new Vue({
    el: '#content',
    data: {
      requestIsLoading: false,
      isLoading: false,
      currentStep: 1,
      selectedMethod: {},
      usersTrades: [],
      deposit: {
        amount: 0,
      },
      url: {
        deposit: '',
      },
    },
    mounted() {
      this.usersTrades = JSON.parse($("#usersTrade").val());
    //   this.url.deposit = $("#processFunding").val();
      
    },

    methods: {
     
    },
  })
  
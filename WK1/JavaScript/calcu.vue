
    <template>
        <div>
          <input type="text" v-model="num1"> + 
          <input type="text" v-model="num2"> = 
          {{result}}
        </div>
      </template>
      
      <script>
      export default {
        data() {
          return {
            num1: 0,
            num2: 0,
          };
        },
        computed: {
          result() {
            return Number(this.num1) + Number(this.num2);
          },
        },
      };
      </script>
      
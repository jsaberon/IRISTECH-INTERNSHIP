<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
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

      
    
</body>
</html>
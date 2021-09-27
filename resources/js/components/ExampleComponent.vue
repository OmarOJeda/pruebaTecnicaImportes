<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header text-center">IMPORTES</div>
          <b-container fluid>
            <b-row
              @click="
                calcularIva();
                calcularImporteIva();
                calcularAnticipo();
                calcular5Millar();
                calcular2Millar();
              "
              class="my-1"
            >
              <b-col sm="2">
                <label>CONTRATO: $</label>
              </b-col>
              <b-col sm="3">
                <input
                  v-model.number="importe.contrato"
                  type="text"
                  class="form-control"
                  id="contrato"
                  name=""
                />
              </b-col>
            </b-row>
            <b-row class="my-1">
              <b-col sm="2">
                <label>IVA %</label>
              </b-col>
              <b-col sm="2">
                <input
                  v-model.number="iva"
                  type="text"
                  class="form-control"
                  @change="
                    calcularIva();
                    calcularImporteIva();
                  "
                  id="iva"
                  name=""
                />
              </b-col>
              <b-col sm="3">
                <input
                  v-model.number="importe.iva"
                  type="text"
                  class="form-control"
                  @change="calcularImporteIva()"
                  id="contratoIva"
                  name=""
                />
              </b-col>
            </b-row>
            <b-row class="my-1">
              <b-col sm="2">
                <label>IMPORTE C/IVA: $</label>
              </b-col>
              <b-col sm="3">
                <input
                  v-model.number="importe.importe"
                  type="text"
                  class="form-control"
                  id="importeIva"
                  name=""
                />
              </b-col>
            </b-row>
            <b-row class="my-1">
              <b-col sm="2">
                <label>ANTICIPO:</label>
              </b-col>
              <b-col sm="1">
                <div>
                  <b-form-checkbox
                    id="checkbox-1"
                    v-model="status"
                    name="checkbox-1"
                    @change="calcularAnticipo()"
                    value="accepted"
                    unchecked-value="not_accepted"
                    >IVA
                  </b-form-checkbox>
                </div>
              </b-col>
              <b-col sm="2">
                <input
                  v-model.number="anticipoDefault"
                  type="number"
                  @change="calcularAnticipo()"
                  class="form-control"
                  id="anticipoDefault"
                  name=""
                />
              </b-col>
              <b-col sm="3">
                <input
                  v-model.number="importe.anticipo"
                  type="text"
                  class="form-control"
                  id="anticipo"
                  name=""
                />
              </b-col>
            </b-row>
            <b-row class="my-1">
              <b-col sm="4">
                <label
                  ><code>ENROGACIONES AL TRABAJO PERSONAL 2.45%:</code></label
                >
              </b-col>
              <b-col sm="3">
                <input
                  v-model.number="importe.enrogacion"
                  type="text"
                  class="form-control"
                  id="enrogaciones"
                  name=""
                />
              </b-col>
            </b-row>
            <b-row class="my-1">
              <b-col sm="2">
                <label><code>5 AL MILLAR: %</code></label>
              </b-col>
              <b-col sm="2">
                <input
                  v-model.number="cincoMillar"
                  type="text"
                  @change="calcular5Millar()"
                  class="form-control"
                  id="cincoMillar"
                  name=""
                />
              </b-col>
              <b-col sm="3">
                <input
                  v-model.number="importe.cincoMillar"
                  type="text"
                  class="form-control"
                  id="millarCinco"
                  name=""
                />
              </b-col>
            </b-row>
            <b-row class="my-1">
              <b-col sm="2">
                <label><code>2 AL MILLAR: %</code></label>
              </b-col>
              <b-col sm="2">
                <input
                  v-model.number="dosMillar"
                  @change="calcular2Millar()"
                  type="text"
                  class="form-control"
                  id="dosMillar"
                  name=""
                />
              </b-col>
              <b-col sm="3">
                <input
                  v-model.number="importe.dosMillar"
                  type="text"
                  class="form-control"
                  id="millarDos"
                  name=""
                />
              </b-col>
            </b-row>
          </b-container>
          <b-button @click="guardar()" variant="success">Guardar</b-button>
          <b-button @click="cargar()" variant="warning">Cargar</b-button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      importe: {
        contrato: "0",
        iva: "0",
        importe: "0",
        anticipo: "0",
        enrogacion: "0",
        cincoMillar: "0",
        dosMillar: "0",
      },
      status: "not_accepted",
      iva: "16",
      anticipoDefault: "30",
      dosMillar: "0.002",
      cincoMillar: "0.005",
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    async calcularIva() {
      if (this.iva >= 0 && this.iva <= 100) {
        this.importe.iva = ((this.importe.contrato * this.iva) / 100).toFixed(
          2
        );
      }
    },
    async calcularImporteIva() {
      this.importe.importe = (
        parseFloat(this.importe.contrato) + parseFloat(this.importe.iva)
      ).toFixed(2);
    },
    async calcularAnticipo() {
      if (this.anticipoDefault >= 0 && this.anticipoDefault <= 100) {
        if (this.status == "not_accepted") {
          this.importe.anticipo = (
            (this.importe.contrato * this.anticipoDefault) /
            100
          ).toFixed(2);
        } else {
          this.importe.anticipo = (
            (this.importe.importe * this.anticipoDefault) /
            100
          ).toFixed(2);
        }
      } else {
        alert("Porcentaje fuera de rango (0 - 100)");
      }
    },
    async calcular5Millar() {
      if (this.cincoMillar >= 0.001 && this.cincoMillar <= 10.001) {
        this.importe.cincoMillar = (
          this.importe.contrato * this.cincoMillar
        ).toFixed(2);
      }
    },
    async calcular2Millar() {
      if (this.dosMillar >= 0.001 && this.dosMillar <= 10.001) {
        this.importe.dosMillar = (
          this.importe.contrato * this.dosMillar
        ).toFixed(2);
      }
    },
    guardar() {
      const params = {
        contrato: this.importe.contrato,
        iva: this.importe.iva,
        importe: this.importe.importe,
        anticipo: this.importe.anticipo,
        enrogacion: this.importe.enrogacion,
        cincoMillar: this.importe.cincoMillar,
        dosMillar: this.importe.dosMillar,
      };
      this.$axios.get("/mostrar").then((response) => {
        if (response.data[0].id != null || response.data[0].id != "") {
          this.$axios.delete("/eliminar" + response.data[0].id);
        }
        this.$axios.post("/guardar", params).then((response) => {
          alert("Guardado");
        });
      });
    },
    cargar() {
      this.$axios.get("/mostrar").then((response) => {
        this.importe.contrato = response.data[0].contrato;
        this.importe.iva = response.data[0].iva;
        this.importe.importe = response.data[0].importe;
        this.importe.anticipo = response.data[0].anticipo;
        this.importe.enrogacion = response.data[0].enrogacion;
        this.importe.cincoMillar = response.data[0].cincoMillar;
        this.importe.dosMillar = response.data[0].dosMillar;
      });
    },
  },
};
</script>

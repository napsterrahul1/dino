@extends('layouts.app')

@section('content')
@include('layouts/message')
<!-- END: Main Menu-->

<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="border rounded p-3">
                    <h4 class="mb-2 card-form-head">Preliminary Data</h4>
                    <hr>
                    <ul>
                        <li>Store the medicine away from strong perfumes, heat and direct sunlight.</li>
                        <li>Touching or handling of the medicines with bare hands should be avoided and the cap of the container can be used to transfer the pill to the mouth.</li>
                        <li>Most of the homoeopathic medicines are to be taken without water. The powder or pill dose is to be kept on a clean tongue and allowed to dissolve. The mouth should be clean and free from any food smell or other odours. Hence eating or drinking anything should be avoided five to ten minutes before or after taking the medicine dose.</li>
                        <li>During the course of the treatment one should avoid coming in contact with any strong smelling substances like perfumes and colognes that may sometimes antidote the effect of medicine.</li>
                        <li><strong>AVOID ALL SKIN APPLICATIONS</strong></li>
                        <ul>
                            <li>Avoid heat and ice fomentation, balms like tiger balm, vicks, nilgiri/eucalyptus, move, snuff etc.</li>
                            <li>Massage oils like narayan tel, ayurvedic oils, homoeopathic oils, medicated soaps, multani mitti etc.</li>
                            <li>In case of eruptions, skin rash, wounds etc, no ointment is advised. Dettol, soframycin, tinaderm flucort, betnovate, arnica ointment, and calendula ointment should be avoided.</li>
                            <li>In case of blunt injuries, chandan, sukkhad, turmeric, ice and heat fomentation should be avoided.</li>
                            <li>Application of mehendi / heena should be avoided.</li>
                            <li>Avoid any eye drops, ear drops, nasal drops and dental ointments.</li>
                            <li>No medicated oils and soaps to be used.</li>
                        </ul>
                        <li>Avoid all cough syrups and cough suppressants.</li>
                        <li>Avoid anesthesia inducing agents in all forms like menthol, mint tablets like vicks, mava, icy cool, polo, paan parag etc.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
			$('#journeyDisease').DataTable();
      } );
</script>

<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'collection',
                    text: 'Export',
                    buttons: [
                        'copy',
                        'excel',
                        'csv',
                        'pdf',
                        'print'
                    ]
                }
            ]
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>

@endsection

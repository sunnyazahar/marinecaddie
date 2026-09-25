<?php

/**
 * Original MarineCaddie long-form copy for service pages (SEO depth).
 * All text authored for MarineCaddie Shipping LLC — not copied from third parties.
 *
 * Merged into each service in PageController::serviceShow().
 */
return [

    'ship-spares-logistics' => [
        'trust' => [
            ['label' => 'Breakdown-ready desk', 'text' => 'Priority lanes when the vessel cannot wait for a spare.'],
            ['label' => 'Docs with the cargo', 'text' => 'Packing, invoices, and clearance notes travel with the part.'],
            ['label' => 'Deck-level handover', 'text' => 'Last mile planned to berth, anchorage, or terminal rules.'],
        ],
        'body' => [
            'Ship spare logistics is the bridge between a supplier warehouse and a working engine room. MarineCaddie Shipping LLC runs that bridge as one coordinated job—not as a chain of handoffs that leave the superintendent guessing where the carton sits.',
            'We start with the part identity, vessel particulars, and the real delivery window against ETA. From there we arrange pickup, export-ready packing, carrier selection (air, ocean, road, courier, or hand carry when justified), and the customs steps that keep the spare legal at the port of call.',
            'Maritime urgency is different from general cargo. Night sailings, short port stays, and class or maker constraints mean the plan must survive ETA slips. Our ops desk re-sequences bookings and last-mile partners when the schedule moves, so the spare still meets the Master or chief engineer.',
            'Clients use this service for planned dry-dock packages as well as breakdown and AOG-style demand. Whether the consignment is a single critical seal or a consolidated maker shipment, you get one accountable contact from enquiry through proof of delivery.',
        ],
        'when_to_use' => [
            'A vessel needs a spare before the next sailing or dry-dock window',
            'Supplier pickup and export packing must happen on a fixed clock',
            'Customs or TP/trans-shipment sits between origin and the port of call',
            'You want door-to-deck coverage instead of “airport only” delivery',
        ],
        'what_we_need' => [
            'Part description / maker reference and quantity',
            'Vessel name, IMO (if available), and next port with ETA/ETD',
            'Preferred delivery point (berth, anchorage, agent warehouse)',
            'Commercial invoices, packing list, and any known HS guidance',
            'Urgency level and any airline or port restrictions you already know',
        ],
        'extra_faqs' => [
            ['q' => 'Can you consolidate spares from several suppliers?', 'a' => 'Yes. We can stage and consolidate where timing allows, then move as one controlled consignment to the vessel.'],
            ['q' => 'Do you only move air freight spares?', 'a' => 'No. We choose air, ocean, road, courier, or hand carry based on size, hazard class, cost, and the vessel clock—not a one-mode default.'],
        ],
    ],

    'onboard-delivery' => [
        'trust' => [
            ['label' => 'Call-window timing', 'text' => 'Handover planned around berth, anchorage, and terminal access.'],
            ['label' => 'Agent-aligned', 'text' => 'We sync with appointed agents and launch operators on the ground.'],
            ['label' => 'Proof you can file', 'text' => 'Photo and signature POD shared with your operations desk.'],
        ],
        'body' => [
            'Onboard delivery is the last controlled step in maritime logistics. Cargo that stops at a warehouse or terminal gate still leaves risk on the table—especially when the vessel’s window is measured in hours.',
            'MarineCaddie stages consignments near the call, confirms access rules with agents and terminals, and arranges berth, launch, or approved handover points so the Master or chief engineer receives the goods as planned.',
            'We treat labelling, packing integrity, and attendance timing as part of the delivery—not afterthoughts. If ETA shifts, we re-sequence staging rather than forcing a failed attempt against a closed gate.',
            'This service pairs naturally with ship spares logistics and vessel husbandry so one desk owns both the long haul and the final metres to deck.',
        ],
        'when_to_use' => [
            'Cargo is already at port but must reach the vessel cleanly',
            'Anchorage or launch delivery is required under local rules',
            'You need documented deck receipt for owners or managers',
            'Spare or stores delivery is tied to a short port stay',
        ],
        'what_we_need' => [
            'Vessel name, berth/anchorage plan, and agent contacts',
            'Cargo description, marks, and piece count',
            'Preferred recipient onboard (Master, C/E, or nominated officer)',
            'Any terminal, ISPS, or launch restrictions known for the call',
        ],
        'extra_faqs' => [
            ['q' => 'Do you deliver weekends and nights?', 'a' => 'Where port and launch services operate, we support after-hours and weekend handovers by prior arrangement.'],
            ['q' => 'What if the vessel sails early?', 'a' => 'We escalate immediately, attempt an earlier slot where possible, and report options so you can decide divert, hold, or next-port delivery.'],
        ],
    ],

    'ship-agency-support' => [
        'trust' => [
            ['label' => 'Call orchestration', 'text' => 'Pre-arrival, alongside, and departure tasks kept on one timeline.'],
            ['label' => 'Authority-aware', 'text' => 'Documentation and attending parties sequenced for the port.'],
            ['label' => 'Clear reporting', 'text' => 'Concise updates your owners and managers can act on.'],
        ],
        'body' => [
            'Ship agency support connects commercial intent with what actually happens at the berth. MarineCaddie helps principals, owners, and managers keep documentation, attending parties, and logistics tasks aligned through the call.',
            'We work as your coordinating partner—alongside an appointed agent where required, or as the operational desk that keeps husbandry, spare deliveries, and clearances from colliding on a short stay.',
            'Pre-arrival briefing matters: vessel particulars, ETA, scope, and which services must be live on arrival. During the call we resolve snags early. On departure you receive a clean summary, not a pile of unresolved threads.',
            'Agency-style support is especially useful when logistics and husbandry sit on the same call and someone must keep the sequence honest.',
        ],
        'when_to_use' => [
            'You need operational coordination beyond a single delivery job',
            'Multiple vendors and authorities attend the same call',
            'Owners want clearer status without micromanaging every vendor',
            'Husbandry and spare logistics must share one timeline',
        ],
        'what_we_need' => [
            'Vessel particulars, ETA/ETD, and nomination details',
            'Scope of support (documentation, husbandry, logistics escort)',
            'Appointed agent contacts if already named',
            'Any owner standing instructions for the port',
        ],
        'extra_faqs' => [
            ['q' => 'Can you replace our nominated agent?', 'a' => 'Where local practice allows and you nominate us, we can lead or co-coordinate. Otherwise we work cleanly with your appointed agent.'],
            ['q' => 'Is reporting formalised?', 'a' => 'Yes—pre-arrival confirmation, alongside updates, and a post-departure summary are standard unless you specify another cadence.'],
        ],
    ],

    'vessel-husbandry' => [
        'trust' => [
            ['label' => 'Practical call support', 'text' => 'Crew, stores, medical, and local logistics handled on the ground.'],
            ['label' => 'Regional strength', 'text' => 'Focused coverage across India, Sri Lanka, Indonesia, and Singapore.'],
            ['label' => 'Cost visibility', 'text' => 'Receipts and completion notes so husbandry spend stays auditable.'],
        ],
        'body' => [
            'Vessel husbandry is the day-to-day work that keeps a port call efficient: crew movements, provisions, medical assistance, cash-to-master coordination, and the local errands that never appear on a glossy brochure but decide whether the call stays calm.',
            'MarineCaddie’s husbandry desk confirms the checklist against ETA, books reliable vendors, and attends so owners are not surprised by gaps between “arranged” and “done”.',
            'We frequently combine husbandry with spare deliveries and onboard handover in the same window—reducing duplicate launches, duplicate waiting time, and duplicate confusion.',
            'Dry-dock and repair calls get the same discipline: scope first, vendors second, attendance third, reconcile last.',
        ],
        'when_to_use' => [
            'Crew change, stores, or medical support is required during the call',
            'You want one desk for husbandry plus spare logistics',
            'Dry-dock attendance needs structured vendor coordination',
            'Owners need transparent cost close-out after the call',
        ],
        'what_we_need' => [
            'Husbandry checklist and any standing owner instructions',
            'Crew lists, passport/visa notes where relevant',
            'Vessel ETA and berth/yard plan',
            'Budget guidance or approval limits for vendors',
        ],
        'extra_faqs' => [
            ['q' => 'Do you cover only Asia ports?', 'a' => 'Primary husbandry focus is India, Sri Lanka, Indonesia, and Singapore. Other ports are handled via vetted partners when nominated.'],
            ['q' => 'Can CTM be arranged?', 'a' => 'Cash-to-master can be coordinated where regulations and banking channels allow; we confirm feasibility before the call.'],
        ],
    ],

    'crew-logistics' => [
        'trust' => [
            ['label' => 'Airport-to-gangway', 'text' => 'Transfers timed to flights, immigration, and sailing.'],
            ['label' => 'Hotel & joiners', 'text' => 'Staging for joiners and leavers without last-minute chaos.'],
            ['label' => 'Document awareness', 'text' => 'Visa and immigration steps flagged early in the plan.'],
        ],
        'body' => [
            'Crew logistics fails quietly until it fails loudly—missed flights, immigration queues, and a vessel that cannot sail because one joiner is still at the wrong terminal.',
            'MarineCaddie plans crew movements as timed logistics: flight arrivals, hotel staging where needed, immigration realities, and vessel access windows. We keep the superintendent informed when a connection slips so alternatives are still possible.',
            'Sign-on and sign-off packages can sit beside husbandry and agency support, so transport, launch, and hotel pieces do not get booked by three different people with three different clocks.',
            'Safety and compliance remain the operators’ responsibility; our role is reliable movement and clear communication around the call.',
        ],
        'when_to_use' => [
            'Joiners or leavers must meet a tight sailing schedule',
            'Hotel staging is required between flight and vessel',
            'Multiple crew movements happen on the same call day',
            'You want crew transport coordinated with husbandry attendance',
        ],
        'what_we_need' => [
            'Crew list with flight details and passport data as required',
            'Join/leave times relative to vessel ETA/ETD',
            'Hotel preference or company policy if applicable',
            'Immigration or visa notes already known for the port',
        ],
        'extra_faqs' => [
            ['q' => 'Do you book flights?', 'a' => 'We primarily coordinate ground logistics and can support flight changes through your preferred channels when asked; airline tickets usually remain with the operator or manning agent.'],
            ['q' => 'Can sick crew be assisted?', 'a' => 'We can arrange transport and hospital coordination as part of husbandry-linked crew support, subject to local medical and immigration rules.'],
        ],
    ],

    'port-coordination' => [
        'trust' => [
            ['label' => 'One call timeline', 'text' => 'Berth, cargo, and attending services sequenced in one plan.'],
            ['label' => 'Terminal reality', 'text' => 'Plans built around actual gate, ISPS, and cut-off rules.'],
            ['label' => 'Exception handling', 'text' => 'ETA slips trigger re-sequencing—not silent failure.'],
        ],
        'body' => [
            'Port coordination is the operating system of a call. Without it, spare deliveries, crew cars, surveys, and terminal slots compete for the same hour and the vessel pays the price.',
            'MarineCaddie builds a single timeline for the parties you nominate: what must be ready pre-arrival, what happens alongside, and what can wait until departure. We stay close to terminal and agent constraints so the plan is executable, not aspirational.',
            'When ETAs move—and they do—we update the sequence and tell you what changed. That is more valuable than a static checklist written three days earlier.',
            'Use port coordination when several MarineCaddie services (or third-party attendances) share one berth window and someone must keep them from colliding.',
        ],
        'when_to_use' => [
            'Multiple services attend the same short port stay',
            'Terminal cut-offs and ISPS access drive the schedule',
            'Owners want a single coordinating contact at the port',
            'Cargo and crew movements must share launch or gate slots',
        ],
        'what_we_need' => [
            'Full attendance list and priorities for the call',
            'Vessel ETA/ETD and berth or terminal nomination',
            'Agent and terminal contacts',
            'Hard constraints (pilotage, tide, terminal night bans)',
        ],
        'extra_faqs' => [
            ['q' => 'Is this the same as ship agency?', 'a' => 'Related but narrower: port coordination focuses on sequencing logistics and attendances; agency support can include broader documentation and authority liaison.'],
            ['q' => 'Can you coordinate third-party vendors?', 'a' => 'Yes—when you authorise us to speak with them and share contacts, we include them in the call timeline.'],
        ],
    ],

    'air-freight' => [
        'trust' => [
            ['label' => 'Vessel-clock air', 'text' => 'Bookings chosen against ETA—not generic transit promises.'],
            ['label' => 'Airport-to-port', 'text' => 'Onward road or launch legs planned into the same job.'],
            ['label' => 'Doc discipline', 'text' => 'Invoices and airway details checked before the cargo moves.'],
        ],
        'body' => [
            'Air freight for maritime cargo is not the same product as general express parcels. Dimensions, urgency, and the vessel’s remaining time at berth decide whether a flight is useful—or merely expensive.',
            'MarineCaddie selects airport pairs and product types that fit maritime reality, then connects the landed cargo to port, agent warehouse, or onboard delivery without losing the clock.',
            'We flag known restrictions early (batteries, magnets, chemicals, odd dimensions) so the booking does not fail at acceptance. Where hand carry or courier is smarter, we say so instead of forcing air freight.',
            'Operators use our air lanes for critical spares, time-sensitive documents accompanying cargo, and short-notice project pieces that cannot wait for ocean.',
        ],
        'when_to_use' => [
            'A spare or project piece must beat a sailing or dry-dock start',
            'Ocean transit cannot meet the vessel window',
            'You need airport-to-port continuity after landing',
            'Cargo is air-eligible and documentation is ready to move',
        ],
        'what_we_need' => [
            'Dimensions, weight, and commodity description',
            'Origin ready date and destination port / airport preference',
            'Vessel ETA if delivery is ship-related',
            'SDS or special handling notes when applicable',
        ],
        'extra_faqs' => [
            ['q' => 'Do you offer airport-to-airport only?', 'a' => 'We can, but most maritime jobs need the onward leg. We quote the full path you actually need.'],
            ['q' => 'What if the airline rejects the cargo?', 'a' => 'We diagnose the reason (docs, packing, commodity), propose compliant alternatives, and re-book where possible without restarting from zero.'],
        ],
    ],

    'ocean-freight' => [
        'trust' => [
            ['label' => 'Port-pair focus', 'text' => 'Routings chosen for reliability to your discharge port.'],
            ['label' => 'Equipment fit', 'text' => 'FCL, LCL, and special gear matched to the cargo—not forced.'],
            ['label' => 'Clear milestones', 'text' => 'Booking, gate-in, departure, and arrival updates you can plan around.'],
        ],
        'body' => [
            'Ocean freight remains the workhorse for volume, weight, and cost-sensitive maritime cargo—including consolidated spares, project packages, and routine fleet supply where air is unnecessary.',
            'MarineCaddie books with the vessel’s commercial reality in mind: cut-offs, transshipment risk, and whether the cargo must connect to a husbandry or onboard delivery window after discharge.',
            'We help you choose FCL vs LCL vs alternative equipment based on cargo profile, not habit. Documentation and customs partners can sit in the same thread so discharge does not become a second project.',
            'When schedules slip, you hear it with options—not after the container already missed the intended connection.',
        ],
        'when_to_use' => [
            'Cargo volume or weight makes air uneconomic',
            'Lead time allows a controlled ocean schedule',
            'You need FCL/LCL advice tied to a port of discharge',
            'Ocean move must connect to local delivery or vessel attendance',
        ],
        'what_we_need' => [
            'Commodity, packing type, and approximate cubes/weight',
            'Origin and destination ports (or door points)',
            'Ready date and any hard delivery deadline',
            'Incidental services required (customs, trucking, onboard)',
        ],
        'extra_faqs' => [
            ['q' => 'Can you handle LCL for ship spares?', 'a' => 'Yes—LCL is common for smaller spare consignments when timing still fits the vessel plan.'],
            ['q' => 'Do you track after departure?', 'a' => 'You receive milestone updates and exception alerts; cadence can be tightened for critical project cargo.'],
        ],
    ],

    'road-transportation' => [
        'trust' => [
            ['label' => 'Port approaches', 'text' => 'Trucking planned around terminal gates and cut-offs.'],
            ['label' => 'Secure handling', 'text' => 'Appropriate vehicles for cartons, pallets, and sensitive spares.'],
            ['label' => 'Linked modes', 'text' => 'Road legs that connect cleanly to air and ocean jobs.'],
        ],
        'body' => [
            'Road transportation closes the gaps that ships and planes cannot: supplier to airport, airport to port, warehouse to berth staging, and cross-border legs where trucking is the sensible mode.',
            'MarineCaddie books vehicles against cargo profile and gate reality—timing matters as much as price when a terminal cut-off or launch slot is fixed.',
            'We keep road moves inside the same operational thread as the parent air or ocean job whenever possible, so drivers are not briefed from a separate, stale email chain.',
            'For oversize or restricted cargo, we confirm permits and escort needs before wheels turn.',
        ],
        'when_to_use' => [
            'Cargo must move between supplier, airport, port, or staging yard',
            'A vessel call depends on timed truck arrival at gate',
            'Cross-border road is part of a multimodal plan',
            'You need bonded or secure trucking for sensitive consignments',
        ],
        'what_we_need' => [
            'Pickup and delivery addresses with access notes',
            'Cargo dimensions, weight, and packing type',
            'Required delivery window and any gate booking references',
            'Special requirements (tail-lift, escort, temperature, security)',
        ],
        'extra_faqs' => [
            ['q' => 'Do you only truck inside the UAE?', 'a' => 'No. We arrange road legs where the job requires them, including corridors linked to your air or ocean routing.'],
            ['q' => 'Can road be booked alone?', 'a' => 'Yes—standalone trucking is available, though many clients book it as part of a wider MarineCaddie move.'],
        ],
    ],

    'express-courier' => [
        'trust' => [
            ['label' => 'Small & urgent', 'text' => 'Documents and compact critical parts on express networks.'],
            ['label' => 'Trackable handoff', 'text' => 'Clear milestones from pickup to signed receipt.'],
            ['label' => 'Escalation path', 'text' => 'We chase exceptions instead of waiting on generic tracking.'],
        ],
        'body' => [
            'Express courier suits compact, time-critical consignments—documents, seals, sensors, and small spares—when a full air-freight booking is heavier than the problem.',
            'MarineCaddie selects the network and service level that matches the clock, then watches the exception points (customs holds, wrong address, missed delivery attempts) that generic tracking pages ignore.',
            'When the parcel must still reach a vessel, we plan the final handoff rather than ending at a city counter.',
            'If courier is the wrong tool (size, DG, or value), we redirect you to air freight or hand carry with a straight explanation.',
        ],
        'when_to_use' => [
            'The piece is small, urgent, and courier-eligible',
            'You need faster movement than standard air freight setup time',
            'Documents must arrive before cargo or crew',
            'A compact spare can clear without full airline cargo acceptance',
        ],
        'what_we_need' => [
            'Exact contents, value, and dimensions',
            'Pickup readiness and delivery address or vessel path',
            'Any declared restrictions (lithium, liquids, aerosols)',
            'Deadline that actually matters to operations',
        ],
        'extra_faqs' => [
            ['q' => 'Is courier always cheaper than air freight?', 'a' => 'Not always. We compare total cost and transit against your deadline and recommend the mode that wins on both.'],
            ['q' => 'Can courier go straight to the vessel?', 'a' => 'Often the courier ends at an address or agent; we then arrange onboard delivery for the final step when needed.'],
        ],
    ],

    'hand-carry' => [
        'trust' => [
            ['label' => 'Escorted urgency', 'text' => 'A nominated carrier moves with the consignment when justified.'],
            ['label' => 'Airline-aware', 'text' => 'Passenger and cabin rules checked before anyone flies.'],
            ['label' => 'Last-mile ready', 'text' => 'Arrival connects to port handover without improvisation.'],
        ],
        'body' => [
            'Hand carry is a specialised option for extreme urgency when commercial air cargo cannot meet the vessel clock and the piece is eligible to travel with a passenger under airline rules.',
            'MarineCaddie confirms eligibility first—size, packing, and commodity—because a refused boarding helps no one. Only then do we arrange the escorted movement and the arrival handover.',
            'This is not a default product. We recommend it when the operational cost of delay exceeds the cost of escort, and when safer modes truly cannot win the timeline.',
            'DG, oversized, and restricted items are declined early with alternatives rather than discovered at the gate.',
        ],
        'when_to_use' => [
            'Commercial air cargo cannot meet a critical vessel window',
            'The piece is compact and airline-passenger eligible',
            'You accept escort cost against downtime risk',
            'Arrival must connect immediately to onboard delivery',
        ],
        'what_we_need' => [
            'Precise dimensions, weight, and photos of the packed piece',
            'Commodity description and any battery/chemical content',
            'Origin city and destination port with hard deadline',
            'Approval for escort cost before tickets are issued',
        ],
        'extra_faqs' => [
            ['q' => 'Is hand carry the same as courier?', 'a' => 'No. Hand carry uses an escorted passenger movement under airline rules; courier uses parcel networks without a dedicated escort.'],
            ['q' => 'Can dangerous goods travel as hand carry?', 'a' => 'Almost never. Most DG is banned in passenger channels; we route compliant freight alternatives instead.'],
        ],
    ],

    'multimodal-transport' => [
        'trust' => [
            ['label' => 'One plan, many legs', 'text' => 'Air, ocean, and road sequenced as a single controlled journey.'],
            ['label' => 'Handoff discipline', 'text' => 'Each mode change has an owner and a checkpoint.'],
            ['label' => 'Cost vs clock', 'text' => 'Mode mix chosen for the vessel deadline—not habit.'],
        ],
        'body' => [
            'Multimodal transport exists because few maritime jobs are pure air or pure ocean from door to deck. Real consignments change modes, change documents, and change custodians—and that is where delay hides.',
            'MarineCaddie designs the full path first: which leg buys speed, which leg buys cost, and where customs or warehousing must sit so the next mode is not starved of cargo.',
            'You deal with one operations thread. We manage the checkpoints between modes so “left origin” does not become “lost between terminals”.',
            'This service fits project pieces, consolidated spares, and any move where a single mode cannot honestly meet both budget and ETA.',
        ],
        'when_to_use' => [
            'The journey needs more than one transport mode',
            'Cost and urgency must be balanced across legs',
            'Customs or staging sits between modes',
            'You want one accountable plan instead of separate vendors',
        ],
        'what_we_need' => [
            'Origin, destination, and any preferred waypoints',
            'Cargo profile and packing constraints',
            'Hard delivery deadline tied to vessel or project',
            'Budget guidance if cost ceilings apply',
        ],
        'extra_faqs' => [
            ['q' => 'Who is liable across modes?', 'a' => 'Liability follows the contracts of each leg; we clarify coverage at quote stage and keep documentation aligned so claims trails stay clear.'],
            ['q' => 'Can multimodal include onboard delivery?', 'a' => 'Yes—the final maritime handover can be part of the same plan.'],
        ],
    ],

    'tp-trans-shipment-clearance' => [
        'trust' => [
            ['label' => 'Hub-aware clearance', 'text' => 'TP moves planned against airline and ocean cut-offs.'],
            ['label' => 'Paper continuity', 'text' => 'Documents kept consistent across the trans-shipment point.'],
            ['label' => 'Hold prevention', 'text' => 'Gaps that cause cargo holds are checked before transfer.'],
        ],
        'body' => [
            'Trans-shipment clearance is where itineraries look fine on a spreadsheet and fail on the ramp. Cargo that must change flights or vessels needs paperwork and timing that survive the hub.',
            'MarineCaddie coordinates TP/trans-shipment clearance so the consignment remains coherent—marks, invoices, and transfer instructions match what the next carrier expects.',
            'We pay attention to connection risk: minimum connect times, weekend hubs, and documentation that arrives after the cargo. The goal is a clean transfer, not a warehouse surprise.',
            'This service often sits inside wider ship-spare or project moves that cannot fly or sail direct.',
        ],
        'when_to_use' => [
            'Cargo must change carrier or mode at a hub',
            'Direct routing is unavailable for the timeline',
            'Previous shipments stalled at trans-shipment points',
            'You need clearance and transfer handled as one job',
        ],
        'what_we_need' => [
            'Full routing intent and hub airport/port',
            'Master documents and house references',
            'Commodity details and any special handling',
            'Downstream delivery deadline after the hub',
        ],
        'extra_faqs' => [
            ['q' => 'Is TP the same as import clearance?', 'a' => 'No. TP/trans-shipment focuses on transfer through a hub; import clearance is for goods entering for local delivery or use.'],
            ['q' => 'Can you recover cargo already on hold?', 'a' => 'Often yes—we diagnose the hold reason and work the missing document or transfer step, then protect the onward connection.'],
        ],
    ],

    'import-clearance' => [
        'trust' => [
            ['label' => 'Entry-ready files', 'text' => 'Invoices and classifications prepared for a clean declaration.'],
            ['label' => 'Port & airport', 'text' => 'Clearance pathways matched to how the cargo arrives.'],
            ['label' => 'Delivery unlock', 'text' => 'Release coordinated so trucking or onboard steps can start.'],
        ],
        'body' => [
            'Import clearance turns arrived cargo into deliverable cargo. Without it, trucks wait, vessels wait, and “landed” becomes a false milestone.',
            'MarineCaddie prepares and lodges the clearance path with attention to commodity detail, valuation support, and the delivery plan that follows release—especially when the next stop is a vessel call.',
            'We flag missing documents early. A clean file before arrival beats heroic corrections after the free time clock starts.',
            'Where duty exemption or special regimes may apply, we connect you to that conversation before assuming a standard duty path.',
        ],
        'when_to_use' => [
            'Cargo will enter for local delivery or onward vessel attendance',
            'You need clearance tied to a fixed delivery window',
            'Previous shipments faced document queries or delays',
            'Import must unlock trucking or onboard delivery the same day',
        ],
        'what_we_need' => [
            'Commercial invoice, packing list, and transport document',
            'Commodity descriptions suitable for classification',
            'Importer details and any licences already held',
            'Intended delivery point after release',
        ],
        'extra_faqs' => [
            ['q' => 'Do you classify HS codes for us?', 'a' => 'We help assemble accurate descriptions and work with licensed brokers/advisors as required by jurisdiction; final classification responsibility follows local rules.'],
            ['q' => 'Can clearance start pre-arrival?', 'a' => 'Where the regime allows pre-alert or pre-lodge steps, we use them to shorten release after landing.'],
        ],
    ],

    'export-clearance' => [
        'trust' => [
            ['label' => 'Gate-out ready', 'text' => 'Export formalities aligned to carrier cut-offs.'],
            ['label' => 'Origin discipline', 'text' => 'Invoices and packing details checked before cargo rolls.'],
            ['label' => 'Mode flexible', 'text' => 'Air, ocean, and truck export paths supported.'],
        ],
        'body' => [
            'Export clearance is the permission slip that lets urgent maritime cargo leave origin on time. Late or incomplete export files burn the best flight or vessel booking.',
            'MarineCaddie aligns export formalities with the booked mode and cut-off, so packing, invoice detail, and declaration timing support the departure you actually need.',
            'We treat export as part of the logistics plan—not a separate bureaucracy that starts after the truck is already at the airport.',
            'When licences or dual-use questions appear, we surface them early rather than at the counter.',
        ],
        'when_to_use' => [
            'Cargo must export on a fixed air or ocean cut-off',
            'Supplier pickup and export docs must move together',
            'You have seen export queries delay maritime jobs before',
            'Export clearance must feed a tight vessel ETA abroad',
        ],
        'what_we_need' => [
            'Exporter details and commercial documents',
            'Accurate packing list and commodity descriptions',
            'Booked or intended mode with cut-off time',
            'Any known licence or control-list questions',
        ],
        'extra_faqs' => [
            ['q' => 'Can you export on our behalf?', 'a' => 'We coordinate export clearance with the proper parties and authorisations for the jurisdiction; exact filing roles depend on local law and your nomination.'],
            ['q' => 'What delays export most often?', 'a' => 'Incomplete invoices, vague commodity descriptions, and last-minute packing changes—share a clean file before cargo moves.'],
        ],
    ],

    'duty-exemption' => [
        'trust' => [
            ['label' => 'Eligibility first', 'text' => 'We test whether an exemption path is realistic before promising it.'],
            ['label' => 'File quality', 'text' => 'Supporting documents assembled for review—not guesswork.'],
            ['label' => 'Clearance link', 'text' => 'Exemption work tied to the actual import movement.'],
        ],
        'body' => [
            'Duty exemption is not a slogan—it is a documented pathway that either fits the cargo and regime or does not. MarineCaddie helps clients explore legitimate relief options and prepare the supporting file without inventing eligibility.',
            'We connect exemption conversations to the real import: timelines, valuation, and whether the operational deadline still works if additional review is required.',
            'Where exemption is unlikely, we say so early so commercial decisions are honest. Where it is plausible, we help assemble the narrative and evidence the authorities expect.',
            'This service sits beside import clearance and customs consulting so duty strategy and physical release stay in one thread.',
        ],
        'when_to_use' => [
            'You believe cargo may qualify for relief or special treatment',
            'Duty cost materially affects the logistics decision',
            'Authorities require structured supporting documents',
            'You want eligibility checked before committing to a routing',
        ],
        'what_we_need' => [
            'Commodity details, end use, and commercial invoices',
            'Importer profile and any prior rulings or references',
            'Shipment timeline and port/airport of entry',
            'Any certificates or contracts that support the claim',
        ],
        'extra_faqs' => [
            ['q' => 'Can you guarantee zero duty?', 'a' => 'No. We assess likelihood and prepare files; final determination rests with the competent authorities.'],
            ['q' => 'Does exemption slow clearance?', 'a' => 'Sometimes review adds time. We flag that trade-off so you can choose between speed and potential duty savings.'],
        ],
    ],

    'customs-consulting' => [
        'trust' => [
            ['label' => 'Practical advice', 'text' => 'Guidance tied to real shipments—not abstract theory.'],
            ['label' => 'Risk visibility', 'text' => 'Classification, valuation, and document gaps called out early.'],
            ['label' => 'Ops linkage', 'text' => 'Advice that still works when the vessel clock is running.'],
        ],
        'body' => [
            'Customs consulting helps maritime operators make fewer expensive surprises: unclear descriptions, weak valuation support, and routing choices that create avoidable holds.',
            'MarineCaddie advises in the language of operations—what to fix before cargo moves, what to expect at entry, and when a specialist ruling or broker escalation is warranted.',
            'We do not replace licensed customs brokers where the law requires them; we make your inputs sharper and your timeline more realistic.',
            'Consulting can be a one-off shipment review or a standing conversation for recurring spare and project flows.',
        ],
        'when_to_use' => [
            'You face repeated customs queries on similar commodities',
            'A new trade lane or product needs a clearance dry-run',
            'Duty, classification, or document strategy is unclear',
            'Operations wants advice before booking an urgent move',
        ],
        'what_we_need' => [
            'Sample invoices and product descriptions',
            'Origin/destination and intended Incoterms',
            'History of prior holds or queries if any',
            'Decision deadline tied to vessel or project dates',
        ],
        'extra_faqs' => [
            ['q' => 'Is consulting a filing service?', 'a' => 'Consulting is advisory. Filing and licensed brokerage are arranged separately as the jurisdiction requires.'],
            ['q' => 'Can you train our suppliers on invoice quality?', 'a' => 'Yes—clear supplier invoice standards prevent most avoidable delays, and we can share practical checklists for your vendors.'],
        ],
    ],

    'oog-cargo' => [
        'trust' => [
            ['label' => 'Survey early', 'text' => 'Dimensions and lifting points confirmed before booking fantasies.'],
            ['label' => 'Route realism', 'text' => 'Port, road, and vessel constraints checked against the piece.'],
            ['label' => 'Method statement', 'text' => 'Clear plan for packing, lifting, and securing.'],
        ],
        'body' => [
            'Out-of-gauge cargo punishes optimism. If length, width, height, or weight breaks standard equipment assumptions, the move must be engineered—not improvised at the terminal.',
            'MarineCaddie starts with accurate measurements, photos, and lifting points. We then test which modes and ports can actually accept the piece within your deadline.',
            'Method statements, lashing concepts, and partner selection come before the booking confirmation email. That order saves weeks.',
            'OOG work often pairs with heavy lift, project cargo, and multimodal planning when the journey has more than one awkward leg.',
        ],
        'when_to_use' => [
            'Cargo exceeds standard container or ULD envelopes',
            'Special trailers, flats, or break-bulk space may be required',
            'Ports or roads have known gauge restrictions',
            'You need a credible plan before committing vessel dates',
        ],
        'what_we_need' => [
            'Certified dimensions, weight, and centre-of-gravity notes if available',
            'Photos and packing/lifting drawings',
            'Origin, destination, and any route constraints',
            'Required delivery window and site access limits',
        ],
        'extra_faqs' => [
            ['q' => 'Is OOG always ocean break-bulk?', 'a' => 'No. Some OOG moves use specialised road or air solutions; we choose based on gauge, weight, and clock.'],
            ['q' => 'What delays OOG most?', 'a' => 'Late or wrong dimensions. Measure once properly before we design the method.'],
        ],
    ],

    'dangerous-goods' => [
        'trust' => [
            ['label' => 'Class before booking', 'text' => 'UN number, class, and packing group confirmed up front.'],
            ['label' => 'Carrier acceptance', 'text' => 'We book only with DG-capable paths for the mode.'],
            ['label' => 'Doc gatekeeping', 'text' => 'Incomplete SDS/DGD packages are stopped early—not at uplift.'],
        ],
        'body' => [
            'Dangerous goods shipping is a compliance pathway first and a transport booking second. MarineCaddie helps maritime and multimodal DG consignments move only when classification, packing, marks/labels, and carrier acceptance line up.',
            'We work from the UN number and packing group, not from optimistic commodity nicknames. That discipline prevents the most common failure mode: cargo grounded because paperwork and packing disagree.',
            'IMDG, IATA, and ADR expectations differ by mode. We keep mode awareness explicit so a plan that works on ocean is not blindly reused for air.',
            'Shippers remain responsible for compliant packing and declarations. Our role is coordination, checklist discipline, carrier booking with DG-capable operators, and escalation when something is incomplete—while still respecting the vessel clock wherever a compliant path exists.',
        ],
        'when_to_use' => [
            'Cargo has a UN number or suspected hazard class',
            'Airlines or ocean lines require DG acceptance before booking',
            'You need IMDG/IATA/ADR-aware routing for maritime urgency',
            'Previous DG shipments failed on documents or packing',
        ],
        'what_we_need' => [
            'Correct UN number, proper shipping name, class, and packing group',
            'SDS and shipper’s declaration inputs as required by mode',
            'Packed dimensions, net/gross quantities, and packing type',
            'Origin, destination, and vessel-related deadline if any',
        ],
        'extra_faqs' => [
            ['q' => 'Can you reclassify our product?', 'a' => 'Classification is a technical determination. We help gather facts and route questions to competent advisors; we do not invent a class to win a booking.'],
            ['q' => 'What if only part of a consignment is DG?', 'a' => 'We segregate planning: DG pieces follow acceptance rules; non-DG may move on a parallel compliant path when that is safer and faster.'],
        ],
    ],

    'heavy-lift' => [
        'trust' => [
            ['label' => 'Lift plan first', 'text' => 'Weights and lifting points verified before crane fantasies.'],
            ['label' => 'Site & ship', 'text' => 'Quay, vessel, and road lift constraints checked together.'],
            ['label' => 'Partner fit', 'text' => 'Gear and crews matched to the actual load case.'],
        ],
        'body' => [
            'Heavy lift is where weight, radius, and ground bearing pressure decide the job. MarineCaddie treats those numbers as inputs, not decorations on a quote.',
            'We coordinate surveys, lifting concepts, and the transport legs that feed the lift—because a perfect crane on the wrong day still fails the project.',
            'Shipboard and quayside lifts need different discipline than yard lifts. We keep the receiving environment in the plan from day one.',
            'Heavy lift frequently overlaps OOG and project cargo; we keep the method statement coherent across all three labels.',
        ],
        'when_to_use' => [
            'Cargo weight or lift geometry exceeds standard handling',
            'Crane, gantry, or specialised gear must be booked',
            'Quay or vessel structural limits affect the lift',
            'You need a method statement before mobilising gear',
        ],
        'what_we_need' => [
            'Accurate weight and lifting drawings',
            'Site photos, ground conditions, and access routes',
            'Preferred lift window and any tide/berth constraints',
            'Insurance and permit expectations from your side',
        ],
        'extra_faqs' => [
            ['q' => 'Do you own the cranes?', 'a' => 'We coordinate qualified lift partners and remain your single planning desk; gear ownership sits with the specialised vendor.'],
            ['q' => 'Can weather stop a lift?', 'a' => 'Yes. We build weather contingencies into the window rather than pretending every slot is guaranteed.'],
        ],
    ],

    'break-bulk' => [
        'trust' => [
            ['label' => 'Stow logic', 'text' => 'Cargo shape and securing needs drive the booking.'],
            ['label' => 'Port pairs that fit', 'text' => 'We avoid ports that cannot handle the discharge method.'],
            ['label' => 'Securing discipline', 'text' => 'Lashing and dunnage treated as part of the move.'],
        ],
        'body' => [
            'Break bulk is for cargo that should not be forced into a container narrative. Steel, machinery, and irregular project pieces often move more honestly as break bulk when timing and ports allow.',
            'MarineCaddie matches cargo geometry to vessel space and port capability, then keeps securing and documentation in the same conversation as the booking.',
            'We prefer early photos and packing truth over late surprises at the hook. That habit protects both schedule and cargo condition.',
            'Break bulk can combine with heavy lift at origin or destination when the piece needs more than a standard shore crane routine.',
        ],
        'when_to_use' => [
            'Cargo is better shipped unpacked or partially unpacked',
            'Containerisation adds cost or risk without benefit',
            'Ports of loading/discharge support break-bulk operations',
            'Securing and stowage need visible planning',
        ],
        'what_we_need' => [
            'Piece list with dimensions and weights',
            'Photos and packing/securing preferences',
            'Load and discharge port constraints',
            'Timeline tied to project or vessel readiness',
        ],
        'extra_faqs' => [
            ['q' => 'Is break bulk slower than FCL?', 'a' => 'It depends on the lane and vessel. We compare realistic ETAs rather than assuming containers always win.'],
            ['q' => 'Who provides dunnage and lashing?', 'a' => 'We specify responsibilities at quote stage so materials and labour are not an argument on loading day.'],
        ],
    ],

    'project-cargo' => [
        'trust' => [
            ['label' => 'Milestone planning', 'text' => 'Fabrication, ready dates, and site receipt on one calendar.'],
            ['label' => 'Mode honesty', 'text' => 'Air, ocean, road, and special gear mixed only when useful.'],
            ['label' => 'Single ops thread', 'text' => 'Vendors and documents reported through one MarineCaddie desk.'],
        ],
        'body' => [
            'Project cargo is a programme, not a single booking. Fabrication slips, site access windows, and ocean cut-offs must be managed as one story or the critical path dissolves into emails.',
            'MarineCaddie runs project moves with milestone discipline: what is ready, what can ship, what must wait, and which mode earns its cost against the installation date.',
            'We combine the specialised tools—OOG, heavy lift, break bulk, multimodal, customs—without forcing every piece through the same product name.',
            'Owners and EPCs get clear status. Surprises still happen in projects; unmanaged surprises should not.',
        ],
        'when_to_use' => [
            'Multiple pieces share one installation or dry-dock window',
            'Cargo mix includes standard and special pieces',
            'You need a coordinating desk across modes and borders',
            'Site or vessel receipt dates drive the logistics calendar',
        ],
        'what_we_need' => [
            'Workscope and milestone dates (ready, ship, deliver, install)',
            'Piece list with preliminary dimensions and weights',
            'Origin/destination constraints and Incoterms',
            'Stakeholder list (owner, yard, site, surveyors)',
        ],
        'extra_faqs' => [
            ['q' => 'Can you run only the freight portion of a project?', 'a' => 'Yes—though most clients gain more when customs, special handling, and last-mile sit in the same plan.'],
            ['q' => 'How do you handle fabrication delays?', 'a' => 'We re-forecast shipping milestones and protect bookings where possible, or release space early to avoid dead freight.'],
        ],
    ],

];
